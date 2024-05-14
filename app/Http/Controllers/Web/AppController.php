<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

        if(env('DOMAIN') != null) {
            $this->DOMAIN = env('DOMAIN')    ;
        }else {
            $this->DOMAIN = $_SERVER['SERVER_NAME'];
        }
        view()->share('DOMAIN', $this->DOMAIN);
        
    }

    public function init_data()
    {
        
    }

    public function removeXss($string)
    {
        //Fix & but allow unicode
        $string = preg_replace('#&(?!\#[0-9]+;)#si', '&amp;', $string);
        $string = str_replace("<", "&lt;", $string);
        $string = str_replace(">", "&gt;", $string);
        $string = str_replace("\"", "&quot;", $string);
        $string = str_replace("\'", "&quot;", $string);
        static $preg_find    = array('#javascript#i', '#vbscript#i');
        static $preg_replace = array('java script',   'vb script');
        return preg_replace($preg_find, $preg_replace, $string);
    }
    
    public function pr($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
}