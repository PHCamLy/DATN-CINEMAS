<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends AdminAppController
{
    private $folder = 'room';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function room_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.room_list',['data' => $d]);
    }

    public function room_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.room_add',['data' => $d]);
    }
    public function room_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.room_edit',['data' => $d]);


    }

    public function room_delete($id = null)
    {   

    }
}
