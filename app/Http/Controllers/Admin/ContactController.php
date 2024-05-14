<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends AdminAppController
{
    private $folder = 'contact';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function contact_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.contact_list',['data' => $d]);
    }

    public function contact_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.contact_add',['data' => $d]);
    }
    public function contact_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.contact_edit',['data' => $d]);


    }

    public function contact_delete($id = null)
    {   

    }
}
