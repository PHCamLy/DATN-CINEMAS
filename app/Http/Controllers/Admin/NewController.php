<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryLinked;
use App\Models\Node;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewController extends AdminAppController
{
    private $folder = 'new';
    private $alias = 'new';
    private $label = 'tin tức';
    private $link_add = 'admin/new/new_add';
    private $link_edit =  'admin/new/new_edit/';
    private $link_delete = 'admin/new/new_delete/';
    private $link_update = 'admin/new/new_update/';
    private $category_list = [];
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

        $ctg = Category::where('type','=','new')->get();
        foreach($ctg as $v)
        {
            $this->category_list[$v->id] = $v->title;
        }
        view()->share('category_list', $this->category_list);
    }

    public function new_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = DB::table('news')
        ->join('nodes', 'news.node_id', '=', 'nodes.id')
        ->select('news.*','nodes.status','nodes.slug')
        ->paginate(15);
        $data = [];
        foreach($d as $v)
        {   
            $v = json_decode(json_encode($v), true);
            $ctgl = CategoryLinked::where('node_id','=',$v['node_id'])->get();
            $v['ctgl'] = $ctgl;
            $data[] = $v;
        }
        return view($this->view_path . $this->folder.'.new_list',['data' => $data]);
    }

    public function new_add(Request $req)
    {
        $d = [];
        $data_all = $req->post('data');
        if($data_all != null)
        {
            // try {
                $ctg_list = array();
                $data = $data_all[$this->alias];
                if(!isset($data['categories']) || !is_array($data['categories']) || count($data['categories']) <=0)
                {
                    $this->res['msg'] = 'Vui lòng chọn mục lục';
                    session()->flash('msg', json_encode($this->res));
                    return back();
                }
                $ctg_list = $data['categories'];
                unset($data['categories']);

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
                $type =  'new';
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
                $s = new News();
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
                
                // xử lý category linked
                if(is_array($ctg_list) && count($ctg_list) > 0 )
                {
                    foreach($ctg_list as $v){

                        $c = new CategoryLinked();
                        $c['node_id'] = $node_id;
                        $c['category_id'] = $v;
                        $c->save();

                    }
                }

                $this->res['msg'] = 'Đã thêm thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            // } catch (Exception $e) {
            //     $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            // }
            session()->flash('msg', json_encode($this->res));
            // return redirect('/'.$this->link_add);
        }
        

        return view($this->view_path . $this->folder.'.new_add',['data' => $d]);
    }
    public function new_edit(Request $req, $id = null)
    {
        $d = News::find($id);
        $c = CategoryLinked::where('node_id','=',$d['node_id'])->get();
        $ctg = [];
        $ctgl = [
            'ctgl' => $c,
        ];
        foreach($c as $v)
        {
            
            $ctg[] = $v['category_id'];
        }
        $ctgl['ctg'] = $ctg;
        
        $node = Node::find($d->node_id);

        $data_all = $req->post('data');
        if($data_all != null)
        {
            // dd($data_all);
            try {
                $ctg_list = array();
                $data = $data_all[$this->alias];
                if(!isset($data['categories']) || !is_array($data['categories']) || count($data['categories']) <=0)
                {
                    $this->res['msg'] = 'Vui lòng chọn mục lục';
                    session()->flash('msg', json_encode($this->res));
                    return back();
                }
                $ctg_list = $data['categories'];
                unset($data['categories']);

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
                $type =  'new';
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
                $c = CategoryLinked::where('node_id','=',$node_id)->delete();
                // xử lý category linked
                if(is_array($ctg_list) && count($ctg_list) > 0 )
                {
                    foreach($ctg_list as $v){

                        $c = new CategoryLinked();
                        $c['node_id'] = $node_id;
                        $c['category_id'] = $v;
                        $c->save();

                    }
                }

                $this->res['msg'] = 'Đã cập nhật thành công';
                $this->res['res'] = 'done';
                // session()->flash('msg', json_encode($this->res));
            } catch (Exception $e) {
                $this->res['msg'] = 'Đã có lỗi xảy ra, vui lòng thử lại';
            }
            session()->flash('msg', json_encode($this->res));
            // return view($this->view_path . $this->folder.'.banner_edit'.'/'.$id);
        }

        return view($this->view_path . $this->folder.'.new_edit',['data' => $d,'ctgl' => $ctgl,'node' => $node]);


    }

    public function new_delete($id = null)
    {   
        $d = News::find($id);
        $n = Node::find($d['node_id'])->delete();
        $c = CategoryLinked::where('node_id','=',$d['node_id'])->delete();
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();
    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = News::find($id);
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
}