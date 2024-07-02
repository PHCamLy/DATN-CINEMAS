@extends('Web.layouts.layout')

@section('title', 'CAM - Liên hệ')

@section('content')

<div class="margin-none">
    <div class="container">
        <div class="">
            <!-- Google Map -->
            <h2 class="text-uppercase">
                Liên hệ với chúng tôi
            </h2>
            <div class="row margin-bottom-20">
                <div class="col-md-8">
                    <div class="clear-fix"></div>
                    <div class="well" id="divCinemaInfo">
                        <h1>Cinemas CAM</h1>
                        <div class="font-16"><b>
                                Địa chỉ:</b> 26 Bích câu, đống đa nhé
                        </div>
                        <br>
                        <div class="font-16"><b>
                                Số điện thoại:</b> 082 2506 426</div>
                        <br>
                        <div class="text-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.126663763315!2d105.82960027594038!3d21.027617287816465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9e8970d983%3A0x8a81ebd56d890746!2zMjYgUC4gQsOtY2ggQ8OidSwgUXXhu5FjIFThu60gR2nDoW0sIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWkgMTAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1719570399936!5m2!1sen!2s"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- BEGIN FORM-->
                    <form action="" id="form-contact" onclick="return false;">
                        <h3>
                            Thông tin phản hồi</h3>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fa fa-user"></i>
                                <input type="text" id="txtName" class="form-control fullname" placeholder="Tên">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fa fa-envelope"></i>
                                <input type="text" id="txtEmail" class="form-control email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fa fa-phone-square"></i>
                                <input type="text" id="txtDienThoai" class="form-control phone"
                                    placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control content" id="txtNoiDung" rows="3=6"
                                placeholder="Nội dung"></textarea>
                        </div>
                        <button type="button" onclick="addFeedback();" class="btn green pull-right">
                            Gửi yêu cầu</button>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
</div>
@stop