<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Contracts\Session\Session;

class UserController extends AppController
{
    private $res= [
        'res' =>'err',
        'msg' =>'',
        'data' =>[],
    ];

    function login()
    {
        
        $data = Request::all();
        $email = isset($data['email']) ? $data['email'] : '';
        $pass = isset($data['pass']) ? $data['pass'] : '';
        $is_ajax = isset($data['is_ajax']) ? $data['is_ajax'] : 0;
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
            }
            else {
                $this->res['msg'] = 'Email hoặc mật khẩu không đúng';
            }
        }
        if($is_ajax == 1)
        {
            echo json_encode($this->res);
            die();
        }
        return view($this->view_path . 'page.login');
    }

    function ajax_login()
    {   
        $data = Request::post();
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

            }
            else {
                $this->res['msg'] = 'Email hoặc mật khẩu không đúng';
            }
        }
        
        echo json_encode($this->res);
        die();
    }

}