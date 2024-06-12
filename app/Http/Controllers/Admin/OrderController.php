<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Node;
use App\Models\Option;
use App\Models\Order;
use App\Models\Room;
use App\Models\Showtime;
use Illuminate\Http\Request;

class OrderController extends AdminAppController
{
    private $folder = 'order';
    private $alias = 'order';
    private $label = 'đặt vé';
    private $link_add = 'admin/order/order_add';
    private $link_edit =  'admin/order/order_edit/';
    private $link_delete = 'admin/order/order_delete/';
    private $link_update = 'admin/order/order_update/';
    private $res = [
        'res' => 'err',
        'msg' => '',
        'data' =>[]
    ];
    //
    function __construct()
    {
        parent::__construct();
        view()->share('label', $this->label);
        view()->share('alias', $this->alias);
        view()->share('link_add', $this->link_add);
        view()->share('link_edit', $this->link_edit);
        view()->share('link_delete', $this->link_delete);
        view()->share('link_update', $this->link_update);


        $b = Branch::get();
        $branch_list = [];
        foreach($b as $v)
        {
            $branch_list[$v['id']] = $v['title'];
        }
        view()->share('branch_list', $branch_list);

        $r = Room::get();
        $room_list = [];
        foreach($r as $v)
        {
            $room_list[$v['id']] = $v['title'];
        }
        view()->share('room_list', $room_list);
    }

    public function order_list()
    {
        $d = [];
        session()->flash('msg', '');
        $d = Order::paginate(15);
        $data= [];
        foreach($d as $v)
        {
            $option_ids = [];
            if($v['option_ids'] != '')
            {
                $option_ids = explode(',',$v['option_ids']);
            }
            $op = [];
            if(count($option_ids) > 0)
            {
                $op = Option::whereIn('id',$option_ids)->get();
                $o = [];
                if($op != null)
                {
                    foreach($op as $c)
                    {
                        $o[$c['id']] = $c['title'];
                    }
                }
                $op =  $o ;
            }
            $st = Showtime::find($v['showtime_id']);
            $node = Node::find($st['node_id']);
            $node = Node::find($st['node_id']);
            $v['showtime'] = $st;
            $v['node'] = $node;
            $v['options'] = $op;
            $data[] = $v;
        }
        return view($this->view_path . $this->folder.'.order_list',['data' => $data]);
    }

    public function order_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.order_add',['data' => $d]);
    }
    public function order_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.order_edit',['data' => $d]);


    }

    public function order_delete($id = null)
    {   
        $d = Order::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }

    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Order::find($id);
        if($val != null)
        {
            $d[$key] = $val;
        }

        $d->save();
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
}