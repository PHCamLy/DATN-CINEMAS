<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Film;
use App\Models\Node;
use App\Models\Room;
use App\Models\Showtime;
use Exception;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ShowtimeController extends AdminAppController
{
    //
    private $folder = 'showtime';
    private $alias = 'showtime';
    private $label = 'Xuất chiếu';
    private $link_add = 'admin/showtime/showtime_add';
    private $link_edit =  'admin/showtime/showtime_edit/';
    private $link_delete = 'admin/showtime/showtime_delete/';

    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' =>[]
    ];
    //
    function __construct()
    {
        parent::__construct();
        view()->share('label', $this->label);
        view()->share('alias', $this->alias);
        view()->share('link_add', $this->link_add);
        view()->share('link_edit', $this->link_edit);
        view()->share('link_delete', $this->link_delete);

        $b = Branch::get();
        $branch_list = [];
        foreach($b as $v)
        {
            $branch_list[$v['id']] = $v['title'];
        }
        view()->share('branch_list', $branch_list);
        
        $n = Node::where(['status' => 1,'type' => 'film'])->get();
        $film_list = [];
        foreach($n as $v)
        {
            $film_list[$v['id']] = $v['title'];
        }
        view()->share('film_list', $film_list);
        
    }

    public function showtime_list()
    {
        session()->flash('msg', '');
        $d = DB::table('showtimes')
        ->join('nodes', 'showtimes.node_id', '=', 'nodes.id')
        ->join('rooms', 'showtimes.room_id', '=', 'rooms.id')
        ->select('showtimes.*','nodes.slug','nodes.title as film_tile','rooms.title as room_title',)
        ->paginate(15);
        $data = [];
        foreach($d as $v)
        {   
            $v = json_decode(json_encode($v), true);
            $data[] = $v;
        }
        return view($this->view_path . $this->folder.'.showtime_list',['data' => $data]);
    }

    public function showtime_add(Request $req)
    {
        $d = [];
        $data_all = $req->post('data');
        if($data_all != null)
        {
            // try {
                $data = $data_all[$this->alias];
                // xử lý time
                if($data['time'] != '')
                {
                    $t = explode(' ',$data['time']) ;
                    $data['day'] = strtotime($t['0']);
                    $data['hour'] = strtotime($data['time']);

                    $f = Film::where(['node_id' => $data['node_id']])->first();
                    if($f != null)
                    {
                        $phut = preg_replace('/[^0-9]/', '', $f['time']);

                        $end_time = strtotime ( '+'. $phut .' minute' ,  $data['hour']) ;
                        $data['end_hour'] =  $end_time;
                    }
                }
                // check trong khung giờ đấy, phòng đấy xem có xuất chiếu nào chưa
                $check = Showtime::where(
                    [
                        ['branch_id',$data['branch_id']],
                        ['room_id', $data['room_id']],
                    ]
                )->where(function (Builder $query )use ($data) {
                    $query->orWhere([
                        ['hour','<=', $data['end_hour']],
                        ['end_hour', '>=' , $data['end_hour']],
                    ])->orWhere([
                        ['hour','<=', $data['hour']],
                        ['end_hour', '>=' , $data['hour']],
                    ]);
                })->first();
                if($check != null)
                {
                    $this->res['msg'] = 'Thời gian bị trung với lịch đã có trước đó';
                    $this->res['res'] = 'err';
                    session()->flash('msg', json_encode($this->res));
                    return Redirect::back();
                }

                unset($data['time']);

                $room_id = $data['room_id'];
                $r = Room::find($room_id);
                if($r != null)
                {
                    $total_chair = $r['total_chair'];
                    $data['empty'] = $total_chair;
                    $map = [];
                    for($i = 1; $i<=$total_chair ; $i++)
                    {
                        $map[$i] = '1';
                    }
                    $map = json_encode($map);
                    $data['map'] = $map;
                }

                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }

                $data['price'] = preg_replace('/[^0-9]/', '', $data['price']);

                $time = time();
                
                $data['created'] =  $time;
                $data['modified'] =  $time;

                $s = new Showtime();
                
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
                        $s[$k] = $this->removeXss($val);
                    }
                }
                $s->save();
                $this->res['msg'] = 'Đã thêm thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            // } catch (Exception $e) {
            //     $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            // }
            session()->flash('msg', json_encode($this->res));
            return redirect('/'.$this->link_add);
        }

        return view($this->view_path . $this->folder.'.showtime_add',['data' => $d]);
    }
    
    public function showtime_edit(Request $req, $id = null)
    {
        $d = [];
        $d = Showtime::find($id);
        if($d['status'] == 1)
        {
            $this->res['msg'] = 'Xuất chiếu đã kích hoạt không thể sửa được';
            $this->res['res'] = 'err';
            session()->flash('msg', json_encode($this->res));
            return Redirect::back();
        }
        
        $data_all = $req->post('data');
        if($data_all != null)
        {
            // dd($data_all);
            // try {
                $data = $data_all[$this->alias];

                if($data['time'] != '')
                {
                    $t = explode(' ',$data['time']) ;
                    $data['day'] = strtotime($t['0']);
                    $data['hour'] = strtotime($data['time']);

                    $f = Film::where(['node_id' => $data['node_id']])->first();
                    if($f != null)
                    {
                        $phut = preg_replace('/[^0-9]/', '', $f['time']);

                        $end_time = strtotime ( '+'. $phut .' minute' ,  $data['hour']) ;
                        $data['end_hour'] =  $end_time;
                    }
                }
                // check trong khung giờ đấy, phòng đấy xem có xuất chiếu nào chưa
                $check = Showtime::whereNotIn(
                    'id', [$id]
                )->where(
                    [
                        ['branch_id',$data['branch_id']],
                        ['room_id', $data['room_id']],
                    ]
                )->where(function (Builder $query )use ($data) {
                    $query->orWhere([
                        ['hour','<=', $data['end_hour']],
                        ['end_hour', '>=' , $data['end_hour']],
                    ])->orWhere([
                        ['hour','<=', $data['hour']],
                        ['end_hour', '>=' , $data['hour']],
                    ]);
                })
                ->first();
                
                if($check != null)
                {
                    $this->res['msg'] = 'Thời gian bị trung với lịch đã có trước đó';
                    $this->res['res'] = 'err';
                    session()->flash('msg', json_encode($this->res));
                    return Redirect::back();
                }

                unset($data['time']);

                $room_id = $data['room_id'];
                $r = Room::find($room_id);
                
                if($r != null)
                {
                    $total_chair = $r['total_chair'];
                    $data['empty'] = $total_chair;
                    $map = [];
                    for($i = 1; $i <= $total_chair ; $i++)
                    {
                        $map['g'.$i] = '1';
                    }
                    
                    $map = json_encode($map);
                    $data['map'] = $map;
                }

                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }

                $data['price'] = preg_replace('/[^0-9]/', '', $data['price']);

                $time = time();
                
                $data['created'] =  $time;
                $data['modified'] =  $time;
                // $s = new Banner();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
                        $d[$k] = $this->removeXss($val);
                    }
                }
                $d->save();
                $this->res['msg'] = 'Đã cập nhật thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            // } catch (Exception $e) {
            //     $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            // }
            session()->flash('msg', json_encode($this->res));
            // return view($this->view_path . $this->folder.'.banner_edit'.'/'.$id);
        }

        return view($this->view_path . $this->folder.'.showtime_edit',['data' => $d]);
    }

    public function showtime_delete($id = null)
    {   
        $d = Showtime::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
    // ajax
    public function get_room($branch_id = null)
    {
        $res = [
            'res' =>'err',
            'msg' => '',
            'data' => []
        ];
        if(is_numeric($branch_id))
        {
            $d= Room::where(['branch_id' => $branch_id])->get();
            if($d != null)
            {
                $res['res'] = 'done';
                $return = [];
                foreach($d as $v)
                {
                    $return[] = [
                        'id' => $v['id'],
                        'title' => $v['title'],
                    ];
                }
                $res['data'] = $return;
            }
        }
        echo json_encode($res);
        die();
    }
}