<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Exception;
use Illuminate\Http\Request;

class OptionController extends AdminAppController
{
    private $folder = 'option';
    private $alias = 'option';
    private $label = 'đồ ăn';
    private $link_add = 'admin/option/option_add';
    private $link_edit =  'admin/option/option_edit/';
    private $link_delete = 'admin/option/option_delete/';
    private $link_update = 'admin/option/option_update/';
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

    public function option_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = Option::paginate(15);
        return view($this->view_path . $this->folder.'.option_list',['data' => $d]);
    }

    public function option_add(Request $req)
    {
        $d = [];
        $data_all = $req->post('data');
        if($data_all != null)
        {
            try {
                $data = $data_all[$this->alias];

                if(isset($data_all['images']))
                {
                    $data['image'] = end($data_all['images']);
                }
                // dd($data);
                $time = time();
                $data['created'] =  $time;
                $data['modified'] =  $time;

                $s = new Option();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {   
                        // if($k == 'time')
                        // {
                        //     $val = strtotime($val);
                        // }
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
            } catch (Exception $e) {
                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            }
            session()->flash('msg', json_encode($this->res));
            // return redirect('/'.$this->link_add);
        }
        return view($this->view_path . $this->folder.'.option_add',['data' => $d]);

    }
    public function option_edit(Request $req, $id = null)
    {
        $d = Option::find($id);
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
                        if($k == 'time')
                        {
                            $val = strtotime($val);
                        }
                        if($k == 'price')
                        {
                            $val = str_replace(',','',$val);
                        }
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

        return view($this->view_path . $this->folder.'.option_edit',['data' => $d]);
    }

    public function option_delete($id = null)
    {   
        $d = Option::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Option::find($id);
        if($val != null)
        {
            $d[$key] = $val;
        }
        $d->save();
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
}