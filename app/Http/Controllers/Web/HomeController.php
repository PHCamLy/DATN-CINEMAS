<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Http\Request;
use App\Models\User;


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

}