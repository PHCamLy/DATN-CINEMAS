<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends AdminAppController
{
    private $folder = 'new';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function new_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.new_list',['data' => $d]);
    }

    public function new_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.new_add',['data' => $d]);
    }
    public function new_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.new_edit',['data' => $d]);


    }

    public function new_delete($id = null)
    {   

    }
}
