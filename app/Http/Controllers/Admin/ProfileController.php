<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends AdminAppController
{
    private $folder = 'profile';
    private $alias = 'profile';
    private $label = 'Thông tin tài khoản';
   
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

    }

    public function profile(Request $req)
    {
        $id = $this->admin['id'];
        
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
                if($data['password'] != '')
                {
                    $data['password'] = md5($data['password']);
                }
                else {
                    unset($data['password']);
                }
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
                session(['admin' => $d->toArray()]);
                $this->res['msg'] = 'Đã cập nhật thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            } catch (Exception $e) {
                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            }
            session()->flash('msg', json_encode($this->res));
            // return view($this->view_path . $this->folder.'.banner_edit'.'/'.$id);
        }

        return view($this->view_path . $this->folder.'.profile',['data' => $d]);


    }

    
}