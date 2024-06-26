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

                    <div class="col-sm-9">
                        <div class="tab-info">
                            <div class="info-inner">
                                <h2 class="title">
                                    Thông tin tài khoản
                                </h2>
                            </div>
                            <form id="user-info-form" action="<?php echo $DOMAIN . 'user/dashboad'?>" method="POST">
                                @csrf
                                <div style="margin-bottom: 20px">
                                    <label>Họ tên <span style="color: #ff6108">*</span></label>
                                    <input type="text" class="form-control" name="fullname"
                                        value="<?php echo $user['fullname']; ?>" required="">
                                </div>
                                <div style="margin-bottom: 20px">
                                    <label>Email <span style="color: #ff6108">*</span></label>
                                    <input type="text" class="form-control" name="email"
                                        value="<?php echo $user['email']; ?>" required="">
                                </div>
                                <div style="margin-bottom: 20px">
                                    <label>Số điện thoại <span style="color: #ff6108">*</span></label>
                                    <input type="text" class="form-control" name="phone"
                                        value="<?php echo $user['phone']; ?>" required="">
                                </div>
                                <button type="submit" class="btn-submit dashboard-button">Lưu thay đổi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop