<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Exception;
use Illuminate\Http\Request;

class BranchController extends AdminAppController
{
    //
    private $folder = 'branch';
    private $alias = 'branch';
    private $label = 'chi nhánh';
    private $link_add = 'admin/branch/branch_add';
    private $link_edit =  'admin/branch/branch_edit/';
    private $link_delete = 'admin/branch/branch_delete/';
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

    public function branch_list()
    {
        session()->flash('msg', '');
        $d = Branch::paginate(15);


        return view($this->view_path . $this->folder.'.branch_list',['data' => $d]);
    }

    public function branch_add(Request $req)
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
               
                $time = time();
                $data['created'] =  $time;
                $data['modified'] =  $time;

                $s = new Branch();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {
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
            return redirect('/'.$this->link_add);
        }

        return view($this->view_path . $this->folder.'.branch_add',['data' => $d]);
    }
    public function branch_edit(Request $req, $id = null)
    {
        $d = [];
        $d = Branch::find($id);
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

        return view($this->view_path . $this->folder.'.branch_edit',['data' => $d]);


    }

    public function branch_delete($id = null)
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