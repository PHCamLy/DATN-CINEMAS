<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Node;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends AdminAppController
{
    private $folder = 'category';
    private $alias = 'category';
    private $label = 'Mục lục';
    private $link_add = 'admin/category/category_add';
    private $link_edit =  'admin/category/category_edit/';
    private $link_delete = 'admin/category/category_delete/';
    private $link_update = 'admin/category/category_update/';
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' =>[]
    ];

    private $category_type = [
        'film' => 'film',
        'new' => 'Tin tức',
        'page' => 'Trang page',
        'link' => 'Liên kết',
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
        view()->share('category_type', $this->category_type);

    }

    public function category_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = Category::paginate(15);
        return view($this->view_path . $this->folder.'.category_list',['data' => $d]);
    }

    public function category_add(Request $req)
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
            
                // save node
                $n = new Node();
                
                $n['created'] =  $time;
                $n['modified'] =  $time;
                $title = isset($data['title']) ? $this->removeXss($data['title']) : '';
                $type =  'category';
                if($title == '')
                {
                    $this->res['msg'] = 'Tên tiên đề không hợp lệ';
                    session()->flash('msg', json_encode($this->res));
                    return back();
                }
               
                $slug = Str::slug($title,'-');
                // check slug
                $check = Node::where('slug', '=', $slug)->first();
                if($check != null)
                {
                    $slug =  $slug . '-' . time();
                }
                
                $n['slug'] = $slug;
                $n['title'] = $title;
                $n['type'] = $type;
                $n['status'] =  isset($data['status']) ? $this->removeXss($data['status']) : 1;

              
                $n->save();
                $node_id = $n->id;

                unset($data['status']);
                $s = new Category();
                foreach($data as $k => $val)
                {
                    if($val != null)
                    {   
                        if($k == 'price')
                        {
                            $val = str_replace(',','',$val);
                        }
                        $s[$k] = $this->removeXss($val);
                    }else{
                        $s[$k] = '';
                    }
                }
                $s['node_id'] = $node_id;
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

        return view($this->view_path . $this->folder.'.category_add',['data' => $d]);
    }

    public function category_edit(Request $req, $id = null)
    {
        $d = Category::find($id);
        $node = Node::find($d->node_id);
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
                // save node
                // $n = new Node();
                                
                $node['modified'] =  $time;
                
                $title = isset($data['title']) ? $this->removeXss($data['title']) : '';
                $type =  'category';
                if($title == '')
                {
                    $this->res['msg'] = 'Tên tiên đề không hợp lệ';
                    session()->flash('msg', json_encode($this->res));
                    return back();
                }

                $slug = Str::slug($title,'-');
                // check slug
                $check = Node::where([['slug', '=', $slug],['id', '!=', $node['id']]])->first();
                if($check != null)
                {
                    $slug =  $slug . '-' . time();
                }

                $node['slug'] = $slug;
                $node['title'] = $title;
                $node['type'] = $type;
                $node['status'] =  isset($data['status']) ? $this->removeXss($data['status']) : 1;


                $node->save();
                $node_id = $node->id;


                $data['node_id'] = $node_id;
                $data['modified'] =  $time;
                unset($data['status']);
                // $s = new Banner();
                foreach($data as $k => $val)
                {

                    if($val != null)
                    {
                        if($k == 'price')
                        {
                            $val = str_replace(',','',$val);
                        }
                        $d[$k] = $this->removeXss($val);
                    }
                    else{
                        $d[$k] = '';
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
        
        return view($this->view_path . $this->folder.'.category_edit',['data' => $d,'node' => $node]);
    }

    public function category_delete($id = null)
    {   
        $d = Category::find($id);
        $n = Node::find($d['node_id'])->delete();
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Category::find($id);
        if($val != null)
        {
            $d[$key] = $val;
        }
        else {
            $v = $d[$key]; 
            if( $v == 1)
            {
                $d[$key] = 0;
            }
            if($v == 0)
            {
                $d[$key] = 1;
            }
        }
        $d->save();
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
}