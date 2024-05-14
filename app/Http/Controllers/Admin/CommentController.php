<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends AdminAppController
{
    private $folder = 'comment';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function comment_list()
    {
        $d = [];

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

    }
}