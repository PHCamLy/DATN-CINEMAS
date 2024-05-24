<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends AdminAppController
{
    private $folder = 'contact';
    private $alias = 'contact';
    private $label = 'Liên hệ';
    private $link_add = 'admin/contact/contact_add';
    private $link_edit =  'admin/contact/contact_edit/';
    private $link_delete = 'admin/contact/contact_delete/';
    private $link_update = 'admin/contact/contact_update/';
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
    }

    public function contact_list()
    {
        session()->flash('msg', '');
        $d = Contact::paginate(15);
        return view($this->view_path . $this->folder.'.contact_list',['data' => $d]);
    }

    public function contact_add(Request $req)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.contact_add',['data' => $d]);
    }
    public function contact_edit(Request $req, $id = null)
    {
        $d = [];
        

        return view($this->view_path . $this->folder.'.contact_edit',['data' => $d]);


    }

    public function contact_delete($id = null)
    {   
        $d = Contact::find($id);
        $d->delete(); 
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã xóa thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();
    }
    public function upadte_field($id = null,$key= null, $val = null)
    {   
        $d = Contact::find($id);
        $this->res['res'] = 'done';
        $this->res['msg'] = 'Đã update thành công';
        $this->res['data'] = [];
        echo json_encode($this->res);
        die();

    }
    
}