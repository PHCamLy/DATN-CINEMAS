@extends('Web.layouts.layout')

@section('title', 'Đăng nhập')

@section('styles')
{{--custom css item suggest search--}}
<style>
.autocomplete-group {
    padding: 2px 5px;
}
</style>
@stop

{{-- <!-- 
@section('breadcrumb')
@include('Web.element.breadcrumb')
@stop --> --}}

@section('content')

<div class="container">
    <div id="BodyContent_ctl00_ctl02_divLogin"
        class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-2 tab-style-1 margin-bottom-20 margin-top-20">
        <ul class="nav nav-tabs text-uppercase tab-information">
            <li class="active text-center" style="width: 50%"><a class="font-16" href="#login" data-toggle="tab">
                    Đăng nhập</a></li>
            <li style="width: 50%" class="text-center"><a class="font-16" href="#register" data-toggle="tab">
                    Đăng ký</a></li>
        </ul>
        <div class="tab-content font-family-san font-16" style="background-color: #fff;">
            
            <div class="tab-pane fade in active" id="login">
                <form action="<?php echo $DOMAIN; ?>" method="POST">
                    @csrf
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-md-16 margin-bottom-10">
                            <label class="control-label font-16">Email</label>
                            <div class="input-icon">
                                <i class="fa fa-user"></i>
                                <input type="text" id="txtLoginName" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-md-16 margin-bottom-20">
                            <label class="control-label font-16">Mật khẩu</label>
                            <div class="input-icon">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="pass" id="txtLoginPassword" class="form-control" placeholder="Mật khẩu">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-md-16 margin-bottom-20">
                            <a href="#" class="fancybox-fast-view"> Quên mật khẩu?</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="req_type" value="login">
                    @php
                    /*
                    <div class="form-group">
                        <div class="col-md-9 margin-bottom-20">
                            <img class="pull-left" id="captchalogin" src="CreateCapchaLogin.jpg" alt="" /><a
                                onclick="changeImage('captchalogin', 'CreateCapchaLogin.aspx')" class="pull-left"
                                style="padding: 9px;"><i style="font-size: 30px;" class="fa fa-refresh"></i></a>
                        </div>
                        <div class="col-md-7 margin-bottom-20">
                            <input type="text" id="txtLoginCaptcha" class="form-control" placeholder="Mã xác thực">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    */
                    @endphp
                    <div class="form-group">
                        <div class="col-md-16 text-center">
                            <div class="form-group">
                                <button type="submit">submit</button>
                                <button type="button" style="min-width: 220px;" id="btnLogin" onclick="login();"
                                    class="btn btn-3 btn-mua-ve">
                                    Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                    @php
                    /*
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-md-16 text-center">
                            <div class="form-group">
                                <button type="button" style="min-width: 220px;" onclick="loginByFacebook();"
                                    class="btn btn-2 btn-mua-ve">

                                    Đăng nhập bằng Facebook</button>
                            </div>
                        </div>
                    </div> */
                    @endphp
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="tab-pane fade" id="register">
                <!-- BEGIN FORM-->
                <div class="form-group">

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16"><span style="color: red;">*</span>&nbsp;Họ tên</label>
                        <input type="text" style="height: 30px;" id="txtName" class="form-control" placeholder="Họ tên">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16"><span style="color: red;">*</span>&nbsp;Email</label>
                        <div class="input-icon">
                            <i class="fa fa-envelope"></i>
                            <input type="text" style="height: 30px;" id="txtEmail" class="form-control"
                                placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16"><span style="color: red;">*</span>&nbsp;Mật khẩu</label>
                        <div class="input-icon">
                            <i class="fa fa-lock"></i>
                            <input type="password" style="height: 30px;" id="txtMatKhau" class="form-control"
                                placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16"><span style="color: red;">*</span>&nbsp;Xác nhận lại mật
                            khẩu</label>
                        <div class="input-icon">
                            <i class="fa fa-lock"></i>
                            <input type="password" style="height: 30px;" id="txtXacNhanMatKhau" class="form-control"
                                placeholder="Xác nhận lại mật khẩu">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16"><span style="color: red;">*</span>&nbsp;Ngày sinh</label>
                        <div class="input-icon">
                            <i class="fa fa-calendar"></i>
                            <input id="txtNgaySinh" style="height: 30px;" class="datepicker form-control"
                                placeholder="Ngày sinh" data-date-format="dd/mm/yyyy">

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16">Giới tính</label>
                        <div class="input-icon">
                            <i class="fa fa-male"></i>
                            <select id="cboSex" style="height: 30px;" class="form-control" data-placeholder="Giới tính"
                                tabindex="1">
                                <option class="option-item" value="0">Giới tính</option>
                                <option class="option-item" value="1">Nam</option>
                                <option class="option-item" value="2">Nữ</option>
                                <option class="option-item" value="3">Khác</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <label class="control-label font-16"><span style="color: red;">*</span>&nbsp;Số điện
                            thoại</label>
                        <div class="input-icon">
                            <i class="fa fa-phone-square"></i>
                            <input type="text" style="height: 30px;" id="txtDienThoai" class="form-control"
                                placeholder="Số điện thoại">
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                @php
                /*
                <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <img class="pull-left" id="captcharegister" src="CreateCapchaRegister.jpg" alt="" /><a
                            onclick="changeImage('captcharegister', 'CreateCapchaRegister.aspx')" class="pull-left"
                            style="padding: 6px 4px 0px;"><i style="font-size: 30px;" class="fa fa-refresh"></i></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-16 margin-bottom-10">
                        <input type="text" style="height: 30px;" id="txtMaXacThuc" class="form-control"
                            placeholder="Mã xác thực">
                    </div>
                </div>
                */
                @endphp
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-md-16">
                        <div class="form-group">
                            <input type="checkbox" id="chk" value="1">
                            <span style="display: normal">Tôi cam kết tuân theo <a href="#chinhsachbaomat-pop-up"
                                    class="fancybox-fast-view">chính sách bảo mật</a> và <a
                                    href="#dieukhoansudung-pop-up" class="fancybox-fast-view">điều khoản sử dụng</a> của
                                BetaCinemas.
                            </span>
                            <span style="display: none">I have read and accecpt the <a href="#chinhsachbaomat-pop-up"
                                    class="fancybox-fast-view">Privacy policy</a> and <a href="#dieukhoansudung-pop-up"
                                    class="fancybox-fast-view">Terms and conditions</a> of BetaCinemas.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-md-16 text-center">
                        <div class="form-group">
                            <button type="button" onclick="dangKy();" class="btn btn-3 btn-mua-ve">
                                Đăng ký</button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                @php
                    /*
               
                <div class="form-group">
                    <div class="col-md-16 text-center">
                        <div class="form-group">
                            <button type="button" style="min-width: 220px;" onclick="loginByFacebook();"
                                class="btn btn-2 btn-mua-ve">
                                Tiếp tục với Facebook
                            </button>
                        </div>
                    </div>
                </div> */
                @endphp
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@stop