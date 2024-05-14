<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Support\Facades\Request;

class UserController extends AppController
{
    private $res= [
        'res' =>'err',
        'msg' =>'',
        'data' =>[],
    ];

    function login()
    {
        // $this->pr(session()->all());
        
        return view($this->view_path . 'page.login');
    }

    public function ajax_login($data = null)
    {   
        if($data != null){
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
                }
                else {
                    $this->res['msg'] = 'Email hoặc mật khẩu không đúng';
                }
            }
        }
        return ($this->res);
    }

}