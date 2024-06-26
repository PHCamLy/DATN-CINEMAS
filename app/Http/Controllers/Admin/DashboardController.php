<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends AdminAppController
{
    //
    public function dashboard()
    {
        $data = [
            'film' => 0,
            'news' => 0,
            'support' => 0,
            'user' => 0,
            'order' => [],
        ];
        // Thống kê films
        $film = DB::table('films')
        ->join('nodes', 'films.node_id', '=', 'nodes.id')
        ->get();
        if($film != null)
        {
            $data['film'] = count($film);
        }

        // Thống kê news
        $news = DB::table('news')
        ->join('nodes', 'news.node_id', '=', 'nodes.id')
        ->get();
        if($news != null)
        {
            $data['news'] = count($news);
        }

        // Thông kê hỗ trợ
        $data['support'] = 0;

        // Thống kê viewer
        
        // user
        $user = User::get();
        if($user != null) {
            $data['user'] = count($user);
        }

        // Thống kê order
        $order = Order::get();
        if($order != null) {
            $data['order'] = $order;
        }
        view()->share('data', $data);

        return view($this->view_path . 'dashboard.dashboard');
    }
}