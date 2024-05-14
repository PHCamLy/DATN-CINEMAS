<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;

class BannerController extends AdminAppController
{
    //

    private $banner_types = [
        'slider' => 'Banner trang chủ',
    ];
    private $limit = 10;
    private $folder = 'banner';

    private $colums = null;
    private $alias = 'Banner';
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' =>[]
    ];
    
    function __construct()
    {
        parent::__construct();
        view()->share('banner_types', $this->banner_types);
        view()->share('alias', $this->alias);
        // $this->colums = Banner::get_colums();
        // dd($this->colums);
    }

    public function banner_list()
    {
        $d = Banner::paginate(15);

        return view($this->view_path . $this->folder.'.banner_list',['data' => $d]);
    }

    public function banner_add(Request $req)
    {
        $d = [];

        $data_all = $req->post('data');
        if($data_all != null)
        {
            try {
                $data = $data_all[$this->alias];

                if(isset($data_all['images']))
                {
                    $data['images'] = implode(',',$data_all['images']);
                }
                $time = time();
                $data['created'] =  $time;
                $data['modified'] =  $time;

                $s = new Banner();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
                        $s[$k] = $val;
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
        }

        return view($this->view_path . $this->folder.'.banner_add',['data' => $d]);
    }
    public function banner_edit(Request $req, $id = null)
    {
        $d = [];
        $d = Banner::find($id);
        $data_all = $req->post('data');
        
        if($data_all != null)
        {
            // dd($data_all);
            try {
                $data = $data_all[$this->alias];

                if(isset($data_all['images']))
                {
                    $data['images'] = implode(',',$data_all['images']);
                }
                $time = time();
                // $data['created'] =  $time;
                $data['modified'] =  $time;

                // $s = new Banner();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
                        $d[$k] = $val;
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

        return view($this->view_path . $this->folder.'.banner_edit',['data' => $d]);


    }

    public function banner_delete($id = null)
    {   

    }




}