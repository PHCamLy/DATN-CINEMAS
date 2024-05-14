<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends AdminAppController
{
    private $folder = 'category';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function category_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.category_list',['data' => $d]);
    }

    public function category_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.category_add',['data' => $d]);
    }
    public function category_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.category_edit',['data' => $d]);


    }

    public function category_delete($id = null)
    {   

    }
}