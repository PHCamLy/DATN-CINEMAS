<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\UserController;
use App\Models\Category;
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

            $alias = $category['type'];
            
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

}