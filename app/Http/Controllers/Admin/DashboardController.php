<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends AdminAppController
{
    //
    public function dashboard()
    {
        
        return view($this->view_path . 'dashboard.dashboard');
    }
}