<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends AdminAppController
{
    private $folder = 'user';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function user_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.user_list',['data' => $d]);
    }

    public function user_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.user_add',['data' => $d]);
    }
    public function user_edit(Request $req, $id = null)
    {
        $d = [];

        return view($this->view_path . $this->folder.'.user_edit',['data' => $d]);


    }

    public function user_delete($id = null)
    {   

    }
}