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
                                    Đổi mật khẩu
                                </h2>
                            </div>
                            <form id="user-changepass" action="<?php echo $DOMAIN . 'user/change_pass'?>" method="POST">
                                @csrf
                                <div style="margin-bottom: 20px">
                                    <label>Mật khẩu cũ <span style="color: #ff6108">*</span></label>
                                    <input type="password" class="form-control old-pass" name="oldpass" value="">
                                </div>
                                <div style="margin-bottom: 20px">
                                    <label>Mật khẩu mới <span style="color: #ff6108">*</span></label>
                                    <input type="password" class="form-control new-pass" name="newpass" value="">
                                </div>
                                <div style="margin-bottom: 20px">
                                    <label>Nhập lại mật khẩu <span style="color: #ff6108">*</span></label>
                                    <input type="password" class="form-control re-pass" value="">
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

@section('scripts')
<script>
    $('#user-changepass').submit(function () {
        var old_pass = $(this).find('.old-pass').val();
        var new_pass = $(this).find('.new-pass').val();
        var re_pass = $(this).find('.re-pass').val();

        if (old_pass == '' || old_pass == undefined) {
            Swal.fire("Vui lòng nhập mật khẩu cũ", '', "warning");
            return false;
        }

        if (new_pass == '' || new_pass == undefined) {
            Swal.fire("Vui lòng nhập mật khẩu mới", '', "warning");
            return false;
        }
        if (new_pass !== re_pass) {
            Swal.fire("Mật khẩu mới không khớp", '', "warning");
            return false;
        }

    })
</script>
@stop