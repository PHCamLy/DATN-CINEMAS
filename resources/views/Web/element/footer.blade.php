@include('Web.element.modal_datve')
<input type="hidden" id="flash" value='<?php echo  Session::get(' msg') !=null ? Session::get('msg'): '' ; ?>'>
<div class="pre-footer">
        <div class="container">
                <div class="row">
                        <div class="col-md-3 col-sm-16 pre-footer-col">
                                <div id="BodyContent_ctl00_bottomPanel" class="ecm-panel">
                                        <ul class="list-unstyled">
                                                <li class="col-lg-16 col-md-16 col-xs-16 margin-xs-bottom-10">
                                                        <a class="site-logo" href="<?php	 echo $DOMAIN; 	 ?>">
                                                                <img style="width: 120px;" alt=""
                                                                        src="<?php echo $DOMAIN ?>img/logo.png">
                                                        </a>
                                                </li>
                                                <?php	 if(isset($categories['footer_1'])){ 
                                                foreach($categories['footer_1'] as $v) {
                                                ?>
                                                <li class="col-lg-16 col-md-8 col-sm-8 col-xs-8">
                                                        <i class="fa fa-angle-right"></i>
                                                        <a href="<?php	 echo $DOMAIN . $v['slug']; 	 ?>">
                                                                <?php	 echo $v['title']; 	 ?>
                                                        </a>
                                                </li>
                                                <?php	 } 	 ?>
                                                <?php	 } 	 ?>

                                        </ul>
                                </div>
                        </div>
                        <div class="col-md-13 col-sm-16 pre-footer-col">
                                <div id="BodyContent_ctl00_bottomRightPanel" class="ecm-panel">
                                        <div class="col-md-8 col-sm-16 pre-footer-col">
                                                <h2>Danh sách phim</h2>
                                                <div class="clearfix"></div>
                                                <ul class="list-unstyled">
                                                        <?php	 if(isset($categories['footer_2'])){ 
                                                                foreach($categories['footer_2'] as $v) {
                                                                ?>
                                                        <li>
                                                                <i class="fa fa-angle-right"></i>
                                                                <a href="<?php	 echo $DOMAIN . $v['slug']; 	 ?>">
                                                                        <?php	 echo $v['title']; 	 ?>
                                                                </a>
                                                        </li>
                                                        <?php	 } 	 ?>
                                                        <?php	 } 	 ?>
                                                </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-16 pre-footer-col">
                                                <h2>KẾT NỐI VỚI CHÚNG TÔI</h2>
                                                <ul class="social-icons">
                                                        <li><a class="facebook" data-original-title="facebook"
                                                                        href="https://www.facebook.com/betacinemas/"></a>
                                                        </li>
                                                        <li><a class="youtube" data-original-title="youtube"
                                                                        href="https://www.youtube.com/channel/UCGj6uah35-eNiH_2mdubYRw/"></a>
                                                        </li>
                                                        <li><a class="tiktok" data-original-title="tiktok"
                                                                        href="https://www.tiktok.com/@beta_cinemas/"></a>
                                                        </li>
                                                        <li><a class="instagram" data-original-title="instagram"
                                                                        href="https://www.instagram.com/betacinemas/"></a>
                                                        </li>
                                                </ul>
                                                <img style="width: 180px;" alt=""
                                                        src="<?php echo $DOMAIN ?>Assets/Common/logo/dathongbao.png">
                                        </div>
                                        <div class="col-md-4 col-sm-16 pre-footer-col">
                                                <h2>LIÊN HỆ</h2>
                                                <div style="float: left;">
                                                        <h4 class="no-margin">CÔNG TY CỔ PHẦN BETA MEDIA</h4>
                                                        <h6>
                                                                Giấy chứng nhận ĐKKD số: 0106633482 - Đăng ký lần đầu
                                                                ngày 08/09/2014 tại Sở Kế hoạch và
                                                                Đầu tư Thành phố Hà Nội
                                                        </h6>
                                                        <h6>Địa chỉ trụ sở: Tầng 3, số 595, đường Giải Phóng, phường
                                                                Giáp Bát, quận Hoàng Mai, thành
                                                                phố Hà Nội</h6>
                                                        <p>
                                                        </p>
                                                        <h6>Hotline: 1900 636807 / 0934632682</h6>
                                                        <h6>Email: mkt@betacinemas.vn</h6>
                                                        <p></p>
                                                        <p>
                                                        </p>
                                                        <h4><strong>Liên hệ hợp tác kinh doanh:</strong></h4>
                                                        <h4>Email: bachtx@betagroup.vn</h4>
                                                        <p></p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>

<script src="{{ asset('js/jquery_number.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/qrcode.min.js') }}"></script>

<script>
        const is_login = <?php echo Session::get('user') != null ? 'true' : 'false'; ?>;
</script>
@section('scripts')
@stop
<script src="{{ asset('js/funtion.js') }}"></script>
<script src="{{ asset('js/constant.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>