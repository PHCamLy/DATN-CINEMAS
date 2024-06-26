<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAppController extends Controller
{
    //
    public $view_path = 'Admin.pages.';
    public $DOMAIN = '';
    public $user = null;
    public $admin = null;
    // public $layout = 'Web/page/layouts/layout';

    public $sidebar = array(
        'Nội dung' => array(
            'Mục lục' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'category/category_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'category/category_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'category/category_add'
                    ),
                ),
            ),
            'Film' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'film/film_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'film/film_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'film/film_add'
                    ),
                ),
            ),
            'Xuất chiếu' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'showtime/showtime_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'showtime/showtime_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'showtime/showtime_add'
                    ),
                ),
            ),
            'Tin tức' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'new/new_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'new/new_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'new/new_add'
                    ),
                ),
            ),
            'Đánh giá' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'comment/comment_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'comment/comment_list'
                    ),
                    // 'Thêm mới' => array(
                    //     'link' => 'comment/comment_list'
                    // ),
                ),
            ),
            'Quản lý chi nhánh' => array(
                'icon' => 'bx bx-import',
                'link' => 'branch/branch_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'branch/branch_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'branch/branch_add'
                    ),
                ),
            ),
            'Quản lý phòng' => array(
                'icon' => 'bx bx-import',
                'link' => 'room/rooms_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'room/room_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'room/room_add'
                    ),
                ),
            ),
            'Đồ ăn' => array(
                'icon' => 'bx bx-import',
                'link' => 'option/option_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'option/option_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'option/option_add'
                    ),
                ),
            ),
            'Coupon' => array(
                'icon' => 'bx bx-import',
                'link' => 'coupon/coupon_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'coupon/coupon_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'coupon/coupon_add'
                    ),
                ),
            ),
        ),
        'Vé xem film' => array(
            'Order' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'order/order_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'order/order_list'
                    ),
                ),
            ),
        ),
        'Thông kê / Báo cáo' => array(
            'Dashboard' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'dashboard/dashboard',
                // 'child' => array(
                //     'Danh sách' => array(
                //         'link' => 'admin/dashboard'
                //     ),
                // ),
            ),
        ),
        'Liên hệ' => array(
            'Hỗ trợ' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'contact/contact_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'contact/contact_list'
                    ),
                ),
            ),
        ),
        'Media' => array(
            'Media' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'banner/banner_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'banner/banner_list'
                    ),
                ),
            ),
        ),
        'Tài khoản' => array(
            'Tài khoản khách hàng' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'user/user_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'user/user_list'
                    ),
                    // 'Thêm mới' => array(
                    //     'link' => 'user/user_add'
                    // ),
                ),
            ),
            'Tài khoản nhân viên' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'admin/admin_list',
                'child' => array(
                    'Danh sách' => array(
                        'link' => 'admin/admin_list'
                    ),
                    'Thêm mới' => array(
                        'link' => 'admin/admin_add'
                    ),
                ),
            ),
        ),
        'Hệ thống' => array(
            'Cài đặt' => array(
                'icon' => 'bx bxl-product-hunt',
                'link' => 'setting/setting_edit',
            ),
        ),
    );

    function __construct()
    {
        if(env('DOMAIN') != null) {
            $this->DOMAIN = env('DOMAIN')    ;
        }else {
            $this->DOMAIN = $_SERVER['SERVER_NAME'];
        }
        
        if(session()->get('admin') != null)
        {
            $this->admin = session()->get('admin');
        }


        view()->share('DOMAIN', $this->DOMAIN);
        view()->share('sidebar', $this->sidebar);

        view()->share('admin', $this->admin);
    }

    public function removeXss($string)
    {   
        if($string != null)
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
        return '';
    }


    public function pr($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }

}