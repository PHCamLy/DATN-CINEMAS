<?php

namespace App\Http\Controllers\Web;

// use Illuminate\Support\Facades\Session;

class HomeController extends AppController
{

    function home_index()
    {

        // Session::put('user','ahihi');

        return view($this->view_path . 'home.home_index');
    }

}