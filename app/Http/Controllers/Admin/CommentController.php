<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends AdminAppController
{
    private $folder = 'comment';
    private $alias = 'comment';
    private $label = 'Bình luận';
    private $link_add = 'admin/comment/comment_add';
    private $link_edit =  'admin/comment/comment_edit/';
    private $link_delete = 'admin/comment/comment_delete/';
    private $link_update = 'admin/comment/comment_update/';

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

    public function comment_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = DB::table('comments')
        ->join('nodes', 'comments.node_id', '=', 'nodes.id')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.*','nodes.id','nodes.slug','users.fullname','users.email','users.phone')
        ->paginate(15);
        
        return view($this->view_path . $this->folder.'.comment_list',['data' => $d]);
    }

    public function comment_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.comment_add',['data' => $d]);
    }
    public function comment_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.comment_edit',['data' => $d]);

    }

    public function comment_delete($id = null)
    {   
        $d = Comment::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Comment::find($id);
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