<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;

class AdminController extends AdminAppController
{
    //
    // public $layout = 'Admin.layouts.login';

    private $folder = 'admin';
    private $alias = 'admin';
    private $label = 'Tài khoản khách hàng';
    private $link_add = 'admin/admin/admin_add';
    private $link_edit =  'admin/admin/admin_edit/';
    private $link_delete = 'admin/admin/admin_delete/';
    private $link_update = 'admin/admin/admin_update/';
    
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' => []
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
        view()->share('sidebar', $this->sidebar);


        // lấy danh sách rạp
    }

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
                    $this->res['msg'] = 'Admin hoặc mật khẩu không đúng';
                }
            }
            session()->flash('msg', json_encode($this->res));
            return redirect('/admin/login');
            dd($data);
        }
        $this->layout = 'Admin.layouts.login';

        return view($this->view_path . 'login',['is_login' => 1]);

    }

    public function admin_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = Admin::paginate(15);
        return view($this->view_path . $this->folder.'.admin_list',['data' => $d]);
    }

    public function admin_add(Request $req)
    {
        $d = [];
        $data_all = $req->post('data');
        
        if($data_all != null)
        {
            // dd($data_all);
            try {
                $data = $data_all[$this->alias];
                // check email or phone
                $data['created'] =  $time;
                $data['created'] =  $time;





                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }
                else {
                    $data['image'] = '';
                }
                
                $time = time();
                $password = $data['password'] != '' ? md5($data['password']) : '';
                $data['password'] = $password;

                
                $data['created'] =  $time;
                $data['modified'] =  $time;
                if(is_array($data['roles']) && count($data['roles']) > 0)
                {

                    $data['roles'] =  implode(',', $data['roles']);

                }else {

                    $data['roles'] = '';
                    
                }

                $d = new Admin();
                // $s = new Banner();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
                        // if($k == 'price')
                        // {
                        //     $val = str_replace(',','',$val);
                        // }
                        $d[$k] = $this->removeXss($val);
                    }
                }
                $d->save();
                $this->res['msg'] = 'Đã thêm thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
                
            } catch (Exception $e) {

                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';

            }
            session()->flash('msg', json_encode($this->res));
            // return view($this->view_path . $this->folder.'.banner_edit'.'/'.$id);
        }

        return view($this->view_path . $this->folder.'.admin_add',['data' => $d]);
    }
    public function admin_edit(Request $req, $id = null)
    {
        $d = Admin::find($id);
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

                // $s = new Banner();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
                        // if($k == 'price')
                        // {
                        //     $val = str_replace(',','',$val);
                        // }
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

        return view($this->view_path . $this->folder.'.admin_edit',['data' => $d]);


    }

    public function admin_delete($id = null)
    {   
        $d = Admin::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Admin::find($id);
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }



    


}