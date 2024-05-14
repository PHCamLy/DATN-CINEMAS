<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends AdminAppController
{
    private $folder = 'coupon';

    //
    function __construct()
    {
        parent::__construct();
        
    }

    public function coupon_list()
    {
        $d = [];

        return view($this->view_path . $this->folder.'.coupon_list',['data' => $d]);
    }

    public function coupon_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.coupon_add',['data' => $d]);
    }
    public function coupon_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.coupon_edit',['data' => $d]);


    }

    public function coupon_delete($id = null)
    {   

    }
}
