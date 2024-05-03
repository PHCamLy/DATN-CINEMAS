<?php

namespace App\Http\Controllers\Web;
// use Illuminate\Support\Facades\Session;

class AppController
{
    //
    public $view_path = 'Web.pages.';
    public $categories = array();
    public $DOMAIN = '';
    public $user = null;
    // public $layout = 'Web/page/layouts/layout';

    function __construct()
    {
        // Session::start();

        if(env('DOMAIN') != null) {
            $this->DOMAIN = env('DOMAIN')    ;
        }else {
            $this->DOMAIN = $_SERVER['SERVER_NAME'];
        }
        view()->share('DOMAIN', $this->DOMAIN);
    }


    public function pr($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
}