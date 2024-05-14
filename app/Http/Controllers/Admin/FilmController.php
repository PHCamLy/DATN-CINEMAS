<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilmController extends AdminAppController
{
    private $folder = 'film';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function film_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.film_list',['data' => $d]);
    }

    public function film_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.film_add',['data' => $d]);
    }
    public function film_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.film_edit',['data' => $d]);


    }

    public function film_delete($id = null)
    {   

    }
}
