<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OptionController extends AdminAppController
{
    private $folder = 'option';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function option_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.option_list',['data' => $d]);
    }

    public function option_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.option_add',['data' => $d]);
    }
    public function option_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.option_edit',['data' => $d]);


    }

    public function option_delete($id = null)
    {   

    }
}
