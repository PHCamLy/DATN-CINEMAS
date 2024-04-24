<?php

namespace App\Http\Controllers\Web;

class AppController
{
    //
    public $view_path = 'Web.pages.';
    public $categories = array();

    // public $layout = 'Web/page/layouts/layout';

    function home_index()
    {
        return view($this->view_path . 'home.home_index');
    }

}