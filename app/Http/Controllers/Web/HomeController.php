<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\UserController;
use App\Models\Category;
use App\Models\Order;
use App\Models\Room;
use App\Models\Showtime;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends AppController
{
    //
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' => []
    ];
    function home_index(Request $request)
    {
        $method = $request->method();
        $data = [];
        if($method == 'POST'){
            $data = $request->post();
            if(isset($data['req_type']))
            {
                if($data['req_type'] == 'login')
                {
                    return $this->ajax_login($data);
                }
                if($data['req_type'] == 'logout')
                {
                    return $this->ajax_logout($data);
                }
            }
        }
        $this->get_product_category();
        
        return view($this->view_path . 'home.home_index');
    }

    private function ajax_login($data = null)
    {
        if($data != null){
            // $user = new UserController();
            // $user->ajax_login($data);

            $email = isset($data['email']) ? $data['email'] : '';
            $pass = isset($data['pass']) ? $data['pass'] : '';
            $password = md5($pass);
            if($email != '')
            {
                $d = User::where([['email',$email],['password',$password]])->first();
                if($d != null)
                {
                    // ghi session
                    $this->res['res'] = 'done';
                    $this->res['msg'] = 'Bạn đã đăng nhập thành công';
                    $this->res['data'] = $d;
                    session(['user' => $d->toArray()]);
                    // session(['user' => 'xxxx']);
                }
                else {
                    $this->res['msg'] = 'Email hoặc mật khẩu không đúng';
                }
            }
            else {
                $this->res['msg'] = 'Email hoặc mật khẩu không đúng';
            }
        }
        session()->flash('msg', json_encode($this->res));
        return redirect('/login');
        // echo json_encode($this->res);
        // die();
    }
    
    private function ajax_logout($data)
    {   
        
    }
    
    public function handle_slug(Request $request,$slug = null)
    {
        if($slug != null)
        {
            $node = DB::table('nodes')
            ->where('slug',$slug)->first();
            $node = json_decode(json_encode($node),true);

           return $this->get_data_page($node);
           
        }
    }

    private function get_data_page($node)
    {
        $data = [];
        $data['node'] = $node;
        $alias = '';
        if($node['type'] == 'category')
        {
            $category = Category::where('node_id',$node['id'])->first();
            if($category['type'] == 'page')
            {
                $data['category'] = $category;
                
                view()->share('data', $data);
                
                return view($this->view_path . 'page.page_detail');
                
            }
            if($category['type'] == 'link')
            {
                return redirect($category['link']);
            }

            view()->share('category', $category);

            $alias = $category['type'] ;
            $alias_tbl = $category['type'] . 's';

            $d = DB::table($alias_tbl)
            // ->join('category_linkeds', $alias_tbl.'.node_id', '=', $alias_tbl.'.node_id')
            ->join('nodes', $alias_tbl.'.node_id', '=', 'nodes.id')
            ->join('category_linkeds', $alias_tbl.'.node_id', '=', 'category_linkeds.node_id')
            ->where([
                ['nodes.status',1],
                ['category_linkeds.category_id',$category['id']]
                ])
            ->select($alias_tbl.'.*','nodes.status','nodes.id as node_id','nodes.slug')
            ->get();
            $d = json_decode(json_encode($d), true);
            $data[$alias] = $d;
            // $this->pr($data);
            // $this->pr($category);
            view()->share('data', $data);
            return view($this->view_path . $alias. '.'.$alias.'_list');
            
        }

        $alias = $node['type'] ;
        $alias_tbl = $node['type'] . 's';
        $d = DB::table($alias_tbl)
        // ->join('category_linkeds', $alias_tbl.'.node_id', '=', $alias_tbl.'.node_id')
        ->join('nodes', $alias_tbl.'.node_id', '=', 'nodes.id')
        ->where([['nodes.status',1],['nodes.id', $node['id']]])
        ->select($alias_tbl.'.*','nodes.status','nodes.id as node_id','nodes.slug')
        ->first();
        $d = json_decode(json_encode($d), true);
        $data[$alias] = $d;
        
        view()->share('data', $data);
        
        return view($this->view_path . $alias. '.'.$alias.'_detail');

    }


    public function ajax(Request $request,$action = null){
        if($action != null)
        {
            $this->{$action}($request);
        }
    }   

    public function ajax_get_showtime(Request $request)
    {
        $res = [
            'res' => 'err',
            'msg' => '',
            'data' => [],
        ];

        $data = $request->all();
        $date = isset($data['date']) ? $this->removeXss($data['date']) : date('d-m-Y',time());
        $n_id = isset($data['node_id']) && is_numeric($data['node_id']) ? $data['node_id'] : 0;

        $date_start = strtotime($date . ' 00:00');
        $date_end = strtotime($date . ' 23:59');
        $con =[
            ['node_id',$n_id],
            ['day', '>=' ,$date_start],
            ['day', '<=' ,$date_end],
        ];
        $d = Showtime::where(
          $con
        )->get();

        $return = [];
        // dd($d);
        foreach($d as $v)
        {
            $v['hour'] = date('H:i',$v['hour']);
            $v['day'] = date('d-m-Y',$v['day']);
            $v['map'] = json_decode(str_replace('&quot;','"',$v['map']));

            if(isset($return[$v['branch_id']]))
            {
                
                $return[$v['branch_id']][] = $v;

            }else{

                $return[$v['branch_id']][] = $v;

            }

        }

        $res['res'] = 'done';
        $res['data'] = $return;
        echo json_encode($res);
        die();
    }

    public function ajax_order_add(Request $request)
    {
        // node_id
        // user
        // showtime_id
        // cart_sum
        // quantity

        $res = [
            'res' => 'err',
            'msg' => '',
            'data' => [],
        ];
        $user  = $request->session()->get('user'); 
        
        $data = $request->all();
        $showtime_id = isset($data['showtime_id']) && is_numeric($data['showtime_id']) ? $data['showtime_id'] : 0;
        $total_price = isset($data['total_price']) && is_numeric($data['total_price']) ? $data['total_price'] : 0;
        $quantity = isset($data['quantity']) && is_numeric($data['quantity']) ? $data['quantity'] : 0;
        $key_ghe = isset($data['key_ghe']) && is_array($data['key_ghe']) ? $data['key_ghe'] : [];

        $st = Showtime::find($showtime_id);
        if($st == null)
        {
            $res['msg'] = 'Lịch chiếu đã bị hủy';
            echo json_encode($res);
            die();
        }
        $st['map'] = json_decode(str_replace('&quot;','"',$st['map']));
        $new_map = [];
        $new_sl = (int)$st['empty'] - $quantity;

        foreach($st['map'] as $key => $v)
        {
            if(in_array($key,$key_ghe))
            {
                $new_map[$key] = 0;
            }
            else {
                $new_map[$key] = $v;
            }
        }
        $st['map'] = json_encode($new_map);
        $st['empty'] = $new_sl;

        $st->save();

        $o = new Order();
        $o['created'] = time();
        $o['showtime_id'] = $showtime_id;
        $o['user_id'] = $user['id'];
        $o['branch_id'] = $st['branch_id'];
        $o['fullname'] = $user['fullname'];
        $o['phone'] = $user['phone'];
        $o['email'] = $user['email'];
        $o['cart_sum'] = $total_price;
        $o['quantity'] = $quantity;
        $o['datetime'] = $st['hour'];

        $o->save();

        $res['res'] = 'done';
        echo json_encode($res);
        die();
    }



    // order
    public function order_add($id)
    {
        if(is_numeric($id))
        {
            $showtime = Showtime::find($id);
            if($showtime != null)
            {
                $showtime['map'] = json_decode(str_replace('&quot;','"',$showtime['map']));

                $film = $d = DB::table('films')
                // ->join('category_linkeds', $alias_tbl.'.node_id', '=', $alias_tbl.'.node_id')
                ->join('nodes', 'films.node_id', '=', 'nodes.id')
                ->where([['nodes.status',1],['nodes.id', $showtime['node_id']]])
                ->select('films.*','nodes.status','nodes.id as node_id','nodes.slug')
                ->first();

                view()->share('film', json_decode(json_encode($film),true));
                
                $branch = '';
                
                $room = Room::find($showtime['room_id']);

                view()->share('room', $room);

                view()->share('showtime', $showtime); 
            }
        }
        else {

        }
        return view($this->view_path . 'home.order_add');

    }
}