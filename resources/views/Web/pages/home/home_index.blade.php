@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')
<div class="margin-none">
    <!--//--- Time Panel ---//-->
    <div id="BodyContent_ctl00_sliderPanel" class="ecm-panel sliderpanel">
        <!-- BEGIN SLIDER -->
        <div class="page-slider margin-bottom-35">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner banner owl-carousel">
                    <?php	 if(isset($banners['slider'])) { 	 ?>
                    <?php	         foreach($banners['slider'] as $v) { ?>
                    <div class="item">
                        <a href="<?php echo $v['link']; ?>"><img src="<?php echo $v['images']; ?>" alt=""
                                style="width:100%;">
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo $v['link']; ?>"><img src="<?php echo $v['images']; ?>" alt=""
                                style="width:100%;">
                        </a>
                    </div>
                    <?php	 } 	 ?>
                    <?php	 } 	 ?>
                </div>
            </div>
        </div>
        <!-- END SLIDER -->
    </div>
    <div id="BodyContent_ctl00_mainPanel" class="ecm-panel" style="position: relative;">
        <form method="post" action="https://www.betacinemas.vn/home.htm?url=home.htm" id="ctl00">
            <div class="aspNetHidden">
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                    value="QTBtzPW5zbPPL7etEfR07DZKept1wKEvcN37vKxGMHSt3dNXb1d05DiuOcQ/7NWhmci0FBx3vIZYTbEJ7FA/ce3h5T6txpbHkrUnNTVvNjs=">
            </div>

            <div class="aspNetHidden">

                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3989C74E">
            </div>
            <div class="container">
                <div class="margin-bottom-35">
                    <div class="text-center">
                        <ul class="nav nav-tabs tab-films">
                            <?php	 if(isset($categories['home_menu'])){ 
                              $i = 0;  foreach($categories['home_menu'] as $v) { $i++;
                                ?>
                            <li class="<?php echo $i == 1 ? 'active' : ''?>">
                                <a href="#tab-<?php echo $i; ?>" data-toggle="tab" id="sapchieu">
                                    <h1 class="font-30 font-sm-15 font-xs-12">
                                        <?php	 echo $v['title']; 	 ?>
                                    </h1>
                                </a>
                            </li>
                            <?php	 } 	 ?>
                            <?php	 } 	 ?>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <?php	 if(isset($item_home_menu)) {
                            $i = 0;  foreach($item_home_menu as $v) { $i++;
                            ?>
                        <div class="tab-pane fade <?php echo $i == 1 ? 'in active' : ''; ?> "
                            id="tab-<?php echo $i; ?>">
                            <div class="row">
                                <?php	 foreach($v as $c) { 	 ?>
                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="<?php echo $c['image']; ?>">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="#" class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('<?php echo $c['title'] ?>', '<?php echo $c['trailer']?>');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="sticker sticker-new"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="film-text text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="<?php	 echo $DOMAIN . $c['slug']; 	 ?>">
                                                        <?php	 echo $c['title']; 	 ?>
                                                    </a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span>
                                                        <?php	 echo $c['genres'] 	 ?>
                                                    </li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span>
                                                        <?php echo $c['time'] ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: block;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '3a58f403-579b-4398-8c00-b8c650aab7fe', 'Lật Mặt 7', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php	 } 	 ?>
                            </div>
                        </div>
                        <?php	 } 	 ?>
                        <?php	 } 	 ?>
                    </div>
                </div>
            </div>
        </form>
        <!-- BEGIN fast view of a product -->
        <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
                <div class="modal-header">
                    <h3 class="no-padding no-margin">TRAILER - <span id="tenphim"></span></h3>
                </div>
                <div class="modal-body text-center" id="trailer">
                </div>
            </div>
        </div>
        <!-- END fast view of a product -->
        <div id="datve-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
                <div class="modal-header">
                    <h3 class="no-padding no-margin">BẠN ĐANG ĐẶT VÉ XEM PHIM</h3>
                </div>
                <div class="modal-body">
                    <h1 class="color1 text-center" id="tenphim-datve"></h1>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 30%">
                                    <h4>Rạp chiếu</h4>
                                </th>
                                <th class="text-center" style="width: 30%">
                                    <h4>Ngày chiếu</h4>
                                </th>
                                <th class="text-center" style="width: 30%">
                                    <h4>Giờ chiếu</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-lg bold">
                                    <h3><span id="rap"></span></h3>
                                </td>
                                <td class="text-center font-lg bold">
                                    <h3><span id="ngaychieu"></span></h3>
                                </td>
                                <td class="text-center font-lg bold">
                                    <h3><span id="giochieu"></span></h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer text-center">
                    <a id="btndatve" class="btn btn-2 btn-mua-ve" style="font-weight: normal;"><span><i
                                class="fa fa-ticket mr3"></i></span>ĐỒNG Ý</a>
                </div>
            </div>
        </div>
        <div id="showtimes-pop-up" style="display: none; height: 510px; width: 1000px; padding: 0px;">
            <div class="product-page product-pop-up">
                <div class="modal-header">
                    <h3 class="no-padding no-margin">LỊCH CHIẾU - <span id="tenphim-showtimes"></span></h3>
                </div>
                <div class="modal-body" style="height: 430px; overflow-y: auto;">
                    <input type="hidden" id="hdFilmId">

                    <h1 class="text-center pull-left" style="width: 100%; margin-top: 0px;">Rạp <span
                            id="tenrap-showtimes"></span></h1>
                    <!-- TABS -->
                    <div class="tab-style-1 margin-bottom-35" id="content-showtimes">
                    </div>
                    <!-- END TABS -->
                </div>
            </div>
        </div>
        <a href="#datve-pop-up" class="fancybox-dat-ve-modal-popup"></a>
    </div>
</div>
@stop