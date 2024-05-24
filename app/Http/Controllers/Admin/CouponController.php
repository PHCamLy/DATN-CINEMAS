<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Coupon;
use Exception;
use Illuminate\Http\Request;

class CouponController extends AdminAppController
{
    private $folder = 'coupon';
    private $alias = 'coupon';
    private $label = 'mã giảm giá';
    private $link_add = 'admin/coupon/coupon_add';
    private $link_edit =  'admin/coupon/coupon_edit/';
    private $link_delete = 'admin/coupon/coupon_delete/';
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

    public function coupon_list()
    {
        session()->flash('msg', '');
        $d = Coupon::paginate(15);

        return view($this->view_path . $this->folder.'.coupon_list',['data' => $d]);
    }

    public function coupon_add(Request $req)
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

                $s = new Coupon();
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
        return view($this->view_path . $this->folder.'.coupon_add',['data' => $d]);
    }

    public function coupon_edit(Request $req, $id = null)
    {
        $d = Coupon::find($id);
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

        return view($this->view_path . $this->folder.'.coupon_edit',['data' => $d]);
    }

    public function coupon_delete($id = null)
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