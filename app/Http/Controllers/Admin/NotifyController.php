<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notify;
use Illuminate\Http\Request;

class NotifyController extends AdminAppController
{
    //
    private $folder = 'notify';
    private $alias = 'notify';
    private $label = 'Thông báo';
    private $link_add = 'admin/notify/notify_add';
    private $link_edit =  'admin/notify/notify_edit/';
    private $link_delete = 'admin/notify/notify_delete/';
    private $link_update = 'admin/notify/notify_update/';
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' =>[]
    ];
    function __construct()
    {
        parent::__construct();
        view()->share('label', $this->label);
        view()->share('alias', $this->alias);
        view()->share('link_add', $this->link_add);
        view()->share('link_edit', $this->link_edit);
        view()->share('link_delete', $this->link_delete);
        view()->share('link_update', $this->link_update);
    }

    public function notify_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = Notify::where('admin_id',$this->admin['id'])->paginate(15);
        return view($this->view_path . $this->folder.'.notify_list',['data' => $d]);
    }

    public function notify_add(Request $req)
    {
        $d = [];
        $data_all = $req->post('data');
        if($data_all != null)
        {
            try {
                $data = $data_all[$this->alias];

                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }
                // dd($data);
                $time = time();
                $data['created'] =  $time;
                $data['modified'] =  $time;
               
                $data['extra'] =  implode(',',$data['extra']);
             

                $s = new Notify();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {   
                        // if($k == 'time')
                        // {
                        //     $val = strtotime($val);
                        // }
                        if($k == 'price')
                        {
                            $val = str_replace(',','',$val);
                        }
                        $s[$k] = $this->removeXss($val);
                    }
                }
                $s->save();
                $this->res['msg'] = 'Đã thêm thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            } catch (Exception $e) {
                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            }
            session()->flash('msg', json_encode($this->res));
            // return redirect('/'.$this->link_add);
        }
        return view($this->view_path . $this->folder.'.notify_add',['data' => $d]);

    }
    public function notify_edit(Request $req, $id = null)
    {
        $d = Notify::find($id);
        $data_all = $req->post('data');
        
        if($data_all != null)
        {
            // dd($data_all);
            try {
                $data = $data_all[$this->alias];

                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }
                else {
                    $data['image'] = '';
                }
                $time = time();
                // $data['created'] =  $time;
                $data['modified'] =  $time;
                $data['extra'] =  implode(',',$data['extra']);

                // $s = new Banner();
                foreach($data as $k => $val)
                {

                    if($val != null)
                    {
                        if($k == 'time')
                        {
                            $val = strtotime($val);
                        }
                        if($k == 'price')
                        {
                            $val = str_replace(',','',$val);
                        }
                        $d[$k] = $this->removeXss($val);
                    }
                }
                $d->save();
                $this->res['msg'] = 'Đã cập nhật thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            } catch (Exception $e) {
                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            }
            session()->flash('msg', json_encode($this->res));
            // return view($this->view_path . $this->folder.'.banner_edit'.'/'.$id);
        }

        return view($this->view_path . $this->folder.'.notify_edit',['data' => $d]);
    }

    public function notify_delete($id = null)
    {   
        $d = Notify::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Notify::find($id);
        if($val != null)
        {
            $d[$key] = $val;
        }
        $d->save();
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
}