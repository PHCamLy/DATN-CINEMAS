<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends AdminAppController
{
    private $folder = 'user';
    private $alias = 'user';
    private $label = 'Liên hệ';
    private $link_add = 'admin/user/user_add';
    private $link_edit =  'admin/user/user_edit/';
    private $link_delete = 'admin/user/user_delete/';
    private $link_update = 'admin/user/user_update/';
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
        view()->share('link_update', $this->link_update);
    }

    public function user_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = User::paginate(15);
        return view($this->view_path . $this->folder.'.user_list',['data' => $d]);
    }

    public function user_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.user_add',['data' => $d]);
    }
    public function user_edit(Request $req, $id = null)
    {
        $d = User::find($id);
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

        return view($this->view_path . $this->folder.'.user_edit',['data' => $d]);


    }

    public function user_delete($id = null)
    {   
        $d = User::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = User::find($id);
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
}