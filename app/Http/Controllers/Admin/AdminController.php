<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends AdminAppController
{
    //
    // public $layout = 'Admin.layouts.login';
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' => []
    ];

    public function login(Request $request)
    {
        
        $method = $request->method();
        if($method == 'POST'){
            $data = $request->post();
            $username = isset($data['username']) ? $data['username'] : '';
            $pass = isset($data['password']) ? $data['password'] : '';
            $password = md5($pass);
            
            if($username != '') {
                $d = Admin::where([['username',$username],['password',$password]])->first();
                if($d != null)
                {
                    // ghi session
                    $this->res['res'] = 'done';
                    $this->res['msg'] = 'Bạn đã đăng nhập thành công';
                    $this->res['data'] = $d;
                    session(['admin' => $d->toArray()]);
                    // session(['user' => 'xxxx']);
                }
                else {
                    $this->res['msg'] = 'User hoặc mật khẩu không đúng';
                }
            }
            session()->flash('msg', json_encode($this->res));
            return redirect('/admin/login');
            dd($data);
        }
        $this->layout = 'Admin.layouts.login';

        return view($this->view_path . 'login',['is_login' => 1]);

    }
}