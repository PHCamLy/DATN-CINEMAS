<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends AdminAppController
{
    //
    private $folder = 'branch';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function branch_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.branch_list',['data' => $d]);
    }

    public function branch_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.branch_add',['data' => $d]);
    }
    public function branch_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.branch_edit',['data' => $d]);


    }

    public function branch_delete($id = null)
    {   

    }
}