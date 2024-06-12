<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends AdminAppController
{
    private $folder = 'setting';
    private $alias = 'setting';
    private $label = 'Cài đặt';
    private $link_add = 'admin/setting/setting_add';
    private $link_edit =  'admin/setting/setting_edit/';
    private $link_delete = 'admin/setting/setting_delete/';
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
    }

    public function setting_list()
    {
        session()->flash('msg', '');
        $d = Setting::get();

        return view($this->view_path . $this->folder.'.setting_list',['data' => $d]);
    }

    public function setting_add(Request $req)
    {
        $d = [];
        $data_all = $req->post('data');
        if($data_all != null)
        {
            // try {
                $data = $data_all[$this->alias];

                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }
                // dd($data);
                $time = time();
                $data['created'] =  $time;
                $data['modified'] =  $time;

                $s = new Setting();
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
                        $s[$k] = $this->removeXss($val);
                    }
                }
                $s->save();
                $this->res['msg'] = 'Đã thêm thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            // } catch (Exception $e) {
            //     $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            // }
            session()->flash('msg', json_encode($this->res));
            // return redirect('/'.$this->link_add);
        }
        return view($this->view_path . $this->folder.'.setting_add',['data' => $d]);
    }

    public function setting_edit(Request $req)
    {
        
        $data_all = $req->post('data');
        
        if($data_all != null)
        {
            // dd($data_all);
            try {
                $data = $data_all[$this->alias];
                // dd($data);
                
                // $s = new Banner();
                foreach($data as $k => $val)
                {
                    if($k == 'showtime')
                    {
                        $val = json_encode($val);
                    }
                    $s = Setting::where('ckey',$k)->first();
                    $s['value'] = $val;
                    $s->save();
                }
                $this->res['msg'] = 'Đã cập nhật thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            } catch (Exception $e) {
                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            }
            session()->flash('msg', json_encode($this->res));
            // return view($this->view_path . $this->folder.'.setting_edit');
        }
        $d = Setting::get();
        $data_return = [];
        foreach($d as $v)
        {
            if($v['ckey'] == 'showtime')
            {
                $v['value'] = json_decode($v['value'],true);
            }
            $data_return[$v['ckey']]  = $v['value'];
        }

        return view($this->view_path . $this->folder.'.setting_edit',['data' => $data_return]);
    }

    public function setting_delete($id = null)
    {   
        $d = Branch::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();
    }
}