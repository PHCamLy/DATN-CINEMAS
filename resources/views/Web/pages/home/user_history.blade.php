@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')
<div class="margin-none">
    <div class="dashboard space-list">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sibar-dashboard">
                            <div class="user">
                                <div class="avatar">
                                    <?php	 $avata  = $user['image'] != '' ? $user['image'] : $user['fullname'][0]; 	 ?>
                                    <div class="avt-name">
                                        <?php	 if($user['image'] != '') { 	 ?>
                                        <img src="<?php	 echo $avata;	 ?>" alt="">
                                        <?php	 }else {  	 ?>
                                        <?php	echo $avata;	 ?>
                                        <?php	 } 	 ?>
                                    </div>
                                </div>
                                <div class="info">
                                    <p class="name">
                                        <?php	 echo $user['fullname']; 	 ?>
                                    </p>

                                    <p class="point">Thành viên</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <ul>
                                <li>
                                    <!-- <img src="" alt="#"> -->
                                    <svg width="16" height="16">
                                        <use href="#info-account"></use>
                                    </svg>
                                    <a href="<?php echo $DOMAIN ?>user/dashboard" title="Thông tin tài khoản">
                                        Thông tin tài khoản
                                    </a>
                                </li>
                                <li>
                                    <!-- <img src="" alt="#"> -->
                                    <svg width="16" height="16">
                                        <use href="#history"></use>
                                    </svg>
                                    <a href="<?php echo $DOMAIN ?>user/history" title="Thông tin tài khoản">
                                        Lịch sử mua vé
                                    </a>
                                </li>

                                <li>
                                    <!-- <img src="" alt="#"> -->
                                    <svg width="16" height="16">
                                        <use href="#change-password"></use>
                                    </svg>
                                    <a href="<?php echo $DOMAIN ?>user/change_pass">Đổi mật khẩu</a>
                                </li>
                                <li>
                                    <!-- <img src="" alt="#"> -->
                                    <svg width="16" height="16">
                                        <use href="#logout"></use>
                                    </svg>
                                    <a href="/logout">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-13">
                        <div class="tab-info">
                            <div class="info-inner">
                                <h2 class="title">
                                    Lịch sử mua vé
                                </h2>
                            </div>
                            <div class="">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên film</th>
                                            <th>Số lượng vé</th>
                                            <th>Giá trị</th>
                                            <th>Ngày đặt</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php	if(count($data) > 0 ) {
                                            $i = 0;
                                            foreach($data as $v) { 	$i++; 
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php	 echo $v['film']['title']; 	 ?>
                                            </td>
                                            <td>
                                                <?php	 echo $v['quantity']; 	 ?>
                                            </td>
                                            <td>
                                                <?php	 echo $v['cart_sum']; 	 ?>
                                            </td>
                                            <td>
                                                <?php	 echo date('d-m-Y',$v['created']); 	 ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo $DOMAIN . 'user/order_detail/'.$v['id'];?>">
                                                    Chi tiết
                                                </a>
                                            </td>
                                        </tr>

                                        <?php	 } 	 ?>
                                        <?php	 }else { 	 ?>
                                        <tr>
                                            <td class="text-center" colspan="6">Lịch sử trống</td>
                                        </tr>
                                        <?php	 } 	 ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop