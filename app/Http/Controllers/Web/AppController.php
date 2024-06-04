<?php

namespace App\Http\Controllers\Web;

use App\Models\Branch;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
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
    public $category_type = [
        'menu' => [],
        'home_menu' => [],
        'footer_1' => [],
        'footer_2' => [],
        'footer_3' => [],
    ];

    public $banners = [
        'slider' => []
    ];
    // public $layout = 'Web/page/layouts/layout';

    function __construct()
    {

        if(env('DOMAIN') != null) {
            $this->DOMAIN = env('DOMAIN')    ;
        }else {
            $this->DOMAIN = $_SERVER['SERVER_NAME'];
        }
        view()->share('DOMAIN', $this->DOMAIN);
        
        $this->init_data();
       

    }

    public function init_data()
    {

        // khởi tạo các data toàn cục   

        // lấy menu
        $categories = DB::table('categories')
        ->join('nodes', 'categories.node_id', '=', 'nodes.id')
        ->where('nodes.status',1)
        ->select('categories.*','nodes.status','nodes.id as node_id','nodes.slug')
        ->get();
        $key = array_keys($this->category_type);
        
        foreach($categories as $v)
        {
            $v = json_decode(json_encode($v), true);

            foreach($key as $k)
            {
                if($v[$k] == 1)
                {
                    $this->category_type[$k][] = $v;
                }
            }
        }
        view()->share('categories', $this->category_type);

        // get banenr
        $banners = DB::table('banners')
        ->where('status',1)
        ->get();
        $key_banner = array_keys($this->banners);
        
        foreach($banners as $v)
        {
            $v = json_decode(json_encode($v), true);

            foreach($key_banner as $k)
            {
                if($v['type'] == $k)
                {
                    $this->banners[$k][] = $v;
                }
            }
        }
        view()->share('banners', $this->banners);

        // get chi nhanh
        $b = Branch::get();
        $branch_list = [];
        foreach($b as $v)
        {
            $branch_list[$v['id']] = $v['title'];
        }
        view()->share('branch_list', $branch_list);
    }

    public function get_product_category()
    {
        $item_home_menu = [];
        foreach($this->category_type['home_menu'] as $v)
        {   
            $alias = 'films';
            if($v['type'] == 'new')
            {
                $alias = 'news';
            }
            
            $d = DB::table($alias)
            ->join('nodes','nodes.id', '=', $alias.'.node_id' )
            ->join('category_linkeds', 'category_linkeds.node_id', '=', $alias.'.node_id')
            ->where([
                ['nodes.status',1],
                ['category_linkeds.category_id',$v['id']]
            ])
            ->select($alias.'.*','nodes.status','nodes.id as node_id','nodes.slug')
            ->get();
            $d = json_decode(json_encode($d), true);
            
            $item_home_menu[$v['id']] = $d;
        }
        // $this->pr($item_home_menu);
        // die();
        view()->share('item_home_menu', $item_home_menu);
        
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