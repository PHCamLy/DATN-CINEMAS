<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends AdminAppController
{
    private $folder = 'order';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function order_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.order_list',['data' => $d]);
    }

    public function order_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.order_add',['data' => $d]);
    }
    public function order_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.order_edit',['data' => $d]);


    }

    public function order_delete($id = null)
    {   

    }
}
