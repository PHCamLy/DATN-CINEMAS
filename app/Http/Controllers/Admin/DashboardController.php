<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
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
            'comment' => 0,
            'contact' => 0,
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

        // Thống kê comment
        $comment = DB::table('comments')
        ->join('nodes', 'comments.node_id', '=', 'nodes.id')
        ->get();
        if($comment != null)
        {
            $data['comment'] = count($comment);
        }

        // Thống kê doanh thu
        // Lấy thông tin của năm hiện tại
        $data_chart_order = [];

        // hom nay
        $time = time();
        $y = date('Y',$time);

        // lay order hom nay
        $order_homnay = 0;
        $start = strtotime(date('Y-m-d 00:00:00', $time));
        $end = strtotime(date('Y-m-d 23:59:59', $time));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $order_homnay+= $v['cart_sum'];
        }
        $data['order_homnay'] = $order_homnay;

        // lay order 7 ngay truoc
        $order_7d = 0;
        $start = strtotime(date('Y-m-d 00:00:00', strtotime("-7 days")));
        $end = strtotime(date('Y-m-d 23:59:59', $time));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $order_7d+= $v['cart_sum'];
        }
        $data['order_7d'] = $order_7d;

        // lay order thang
        $order_thangnay = 0;
        $start = strtotime(date('Y-m-01 00:00:00', $time));
        $end = strtotime(date('Y-m-31 23:59:59', $time));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $order_thangnay+= $v['cart_sum'];
        }
        $data['order_thangnay'] = $order_thangnay;
        
        // t1
        $t1=0;
        $start = strtotime('1-1-'. $y . ' 00:00:00');
        $end = strtotime(date('t-1-'. $y . ' 23:59:59',$start));

        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t1 += $v['cart_sum'];
        }
        $data_chart_order[] = $t1;
        // t2
        $t2 = 0;
        $start = strtotime('1-2-'. $y . ' 00:00:00');
        $end = strtotime(date('t-2-'. $y . ' 23:59:59',$start));
        
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t2 += $v['cart_sum'];
        }
        $data_chart_order[] = $t2;
        
        // t3
        $t3 = 0;
        $start = strtotime('1-3-'. $y . ' 00:00:00');
        $end = strtotime(date('t-3-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t3 += $v['cart_sum'];
        }
        $data_chart_order[] = $t3;

        // t4
        $t4 = 0;
        $start = strtotime('1-4-'. $y . ' 00:00:00');
        $end = strtotime(date('t-4-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t4 += $v['cart_sum'];
        }
        $data_chart_order[] = $t4;
        // t5
        $t5 = 0;
        $start = strtotime('1-5-'. $y . ' 00:00:00');
        $end = strtotime(date('t-5-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t5 += $v['cart_sum'];
        }
        $data_chart_order[] = $t5;

        // t6
        $t6 = 0;
        $start = strtotime('1-6-'. $y . ' 00:00:00');
        $end = strtotime(date('t-6-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t6 += $v['cart_sum'];
        }
        $data_chart_order[] = $t6;
        
        // t7
        $t7 = 0;
        $start = strtotime('1-7-'. $y . ' 00:00:00');
        $end = strtotime(date('t-7-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t7 += $v['cart_sum'];
        }
        $data_chart_order[] = $t7;
        
        // t8
        $t8 = 0;
        $start = strtotime('1-8-'. $y . ' 00:00:00');
        $end = strtotime(date('t-8-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t8 += $v['cart_sum'];
        }
        $data_chart_order[] = $t8;
        
        // t9
        $t9 = 0;
        $start = strtotime('1-9-'. $y . ' 00:00:00');
        $end = strtotime(date('t-9-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t9 += $v['cart_sum'];
        }
        $data_chart_order[] = $t9;
        
        // 10
        $t10 = 0;
        $start = strtotime('1-10-'. $y . ' 00:00:00');
        $end = strtotime(date('t-10-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t10 += $v['cart_sum'];
        }
        $data_chart_order[] = $t10;
        
        // 11
        $t11 = 0;
        $start = strtotime('1-11-'. $y . ' 00:00:00');
        $end = strtotime(date('t-11-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t11 += $v['cart_sum'];
        }
        $data_chart_order[] = $t11;
        
        // 12
        $t12 = 0;
        $start = strtotime('1-12-'. $y . ' 00:00:00');
        $end = strtotime(date('t-12-'. $y . ' 23:59:59',$start));
        $o = Order::where([['created','>=',$start],['created','<=',$end]])->get();
        foreach($o as $v)
        {
            $t12 += $v['cart_sum'];
        }
        $data_chart_order[] = $t12;
        
        // Toàn thời gian
        $o_full = Order::get();
        $order_full_total = 0;
        $order_full_price = 0;
        foreach($o_full as $v)
        {
            $order_full_total++;
            $order_full_price += $v['cart_sum'];
        }
        $data['order_full_price'] = $order_full_price;
        $data['order_full_total'] = $order_full_total;
        
        $data['data_chart_order'] = $data_chart_order;


        // lay danh sach lien he
        $support = Contact::get();
        $data['contact'] = count($support);

        // user
        $user = User::get();
        if($user != null) {
            $data['user'] = count($user);
        }
        // Thống kê order
        $order = Order::orderBy('id','desc')->skip(0)->take(10)->get();
        if($order != null) {
            $data['order'] = $order;
        }
        view()->share('data', $data);

        return view($this->view_path . 'dashboard.dashboard');
    }
}