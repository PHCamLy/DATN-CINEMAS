@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')
<div class="margin-none">
    <!--//--- Time Panel ---//-->
    <div id="BodyContent_ctl00_sliderPanel" class="ecm-panel sliderpanel">
        <!-- BEGIN SLIDER -->
        <div class="page-slider margin-bottom-35">
            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>

                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>

                    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>

                    <li data-target="#myCarousel" data-slide-to="3"></li>

                    <li data-target="#myCarousel" data-slide-to="4"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item">
                        <a href="https://betacinemas.vn/khuyen-mai-moi/he-ruc-chay-sale-cham-day.htm"><img
                                src="../files.betacorp.vn/media/images/2024/04/21/he-ruc-chay-sale-cham-day-1702-x-621-193310-210424-33.png"
                                alt="" style="width:100%;"></a>
                    </div>

                    <div class="item">
                        <a href="https://betacinemas.vn/khuyen-mai-moi/99k-tau-ngay-ve-va-combo-bap-nuoc.htm"><img
                                src="../files.betacorp.vn/media/images/2024/04/22/combo-hoc-sinh-sinh-vien-1702-x-621-163247-220424-10.png"
                                alt="" style="width:100%;"></a>
                    </div>

                    <div class="item active">
                        <a href="https://betacinemas.vn/khuyen-mai-moi/deal-nong-bong-hong-he-sang.htm"><img
                                src="../files.betacorp.vn/media/images/2024/04/21/deal-nong-bong-don-he-sang-1702-x-621-193117-210424-53.png"
                                alt="" style="width:100%;"></a>
                    </div>

                    <div class="item">
                        <a href="tin-ben-le/huong-dan-dang-nhap-tai-khoan-beta-cinemas.html"><img
                                src="../files.betacorp.vn/media/images/2024/04/11/huong-dan-dang-nhap-1702-x-621-2-163005-110424-74.png"
                                alt="" style="width:100%;"></a>
                    </div>

                    <div class="item">
                        <a href="https://betacinemas.vn/beta-cinemas-ung-van-khiem-sieu-pham-trong-thoi-gian-toi.htm"><img
                                src="../files.betacorp.vn/media/images/2024/04/12/sap-khai-truong-uvk-2-1702-x-621-151519-120424-79.png"
                                alt="" style="width:100%;"></a>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- LayerSlider start -->

            <!-- LayerSlider end -->
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
                            <li><a href="#tab-2" data-toggle="tab" id="sapchieu">
                                    <h1 class="font-30 font-sm-15 font-xs-12">
                                        PHIM SẮP CHIẾU</h1>
                                </a></li>
                            <li class="active"><a href="#tab-1" data-toggle="tab" id="dangchieu">
                                    <h1 class="font-30 font-sm-15 font-xs-12">
                                        PHIM ĐANG CHIẾU</h1>
                                </a></li>
                            <li><a href="#tab-3" data-toggle="tab" id="dacbiet">
                                    <h1 class="font-30 font-sm-15 font-xs-12">
                                        SUẤT CHIẾU ĐẶC BIỆT</h1>
                                </a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1">
                            <div class="row">

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/22/400x633-103634-220424-69.png">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="#" class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Lật Mặt 7', 'https://www.youtube.com/watch?v=QdtPQ0wV53M');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                                <div class="sticker sticker-new"></div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim8463.html?gf=3a58f403-579b-4398-8c00-b8c650aab7fe">Lật
                                                        Mặt 7</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Tâm lý, Gia đình</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 138
                                                        phút
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

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/19/400x633-17-114455-190424-54.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Vây Hãm: Kẻ Trừng Phạt', 'https://www.youtube.com/watch?v=Ninhkg7Jh48');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                                <div class="sticker sticker-new"></div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phimc93b.html?gf=72d22df0-ae0e-4f6c-86f0-251d8960b92c">Vây
                                                        Hãm: Kẻ Trừng Phạt</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hành động, Tội Phạm</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 109
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: block;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '72d22df0-ae0e-4f6c-86f0-251d8960b92c', 'Vây Hãm: Kẻ Trừng Phạt', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/03/31/400x633-8-171904-310324-45.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Cái Giá Của Hạnh Phúc', 'https://www.youtube.com/watch?v=QoDrd25FeNA');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                                <div class="sticker sticker-new"></div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phimede7.html?gf=4177fb29-3414-4cfb-ac4a-d77fa9b14ded">Cái
                                                        Giá Của Hạnh Phúc</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Tâm lý, Tình cảm</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 115
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: block;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '4177fb29-3414-4cfb-ac4a-d77fa9b14ded', 'Cái Giá Của Hạnh Phúc', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/17/thumb-115623-170424-49.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-13.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Thanh Xuân 18X2: Lữ Trình Hướng Về Em', 'https://www.youtube.com/watch?v=Nwia8LzKiu8');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                                <div class="sticker sticker-new"></div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim7eca.html?gf=49ea64bf-e1ae-4991-9189-9372391d8d37">Thanh
                                                        Xuân 18X2: Lữ Trình Hướn...</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Lãng mạn</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 123
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: block;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '49ea64bf-e1ae-4991-9189-9372391d8d37', 'Thanh Xuân 18X2: Lữ Trình Hướng Về Em', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/05/quy-cai-135324-050424-10.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Quỷ Cái', 'https://www.youtube.com/watch?v=wRGld7bCB1A');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phimb0d9.html?gf=571cc3c0-0bba-4f6f-9502-d679eddd2448">Quỷ
                                                        Cái</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Kinh dị</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 90
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '571cc3c0-0bba-4f6f-9502-d679eddd2448', 'Quỷ Cái', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/03/31/4x5-digital-172214-310324-65.png">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Điềm Báo Của Quỷ', 'https://www.youtube.com/watch?v=AVAnQaJ49l8');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim4d37.html?gf=6a5af641-9ebd-45c8-ac42-0ef6b2e0b285">Điềm
                                                        Báo Của Quỷ</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Kinh dị</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 119
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '6a5af641-9ebd-45c8-ac42-0ef6b2e0b285', 'Điềm Báo Của Quỷ', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/03/31/vn-gxk-vert-tsr-2764x4096-intl-165547-310324-43.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="#" class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Godzilla x Kong: Đế Chế Mới', 'https://www.youtube.com/watch?v=RXc2bs_aBuA');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim5430.html?gf=defdaed2-3776-4ed1-888e-a8531dfc5d15">Godzilla
                                                        x Kong: Đế Chế Mới</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hành động, Phiêu lưu</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 115
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: block;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', 'defdaed2-3776-4ed1-888e-a8531dfc5d15', 'Godzilla x Kong: Đế Chế Mới', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/15/470wx700h-101327-150424-93.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-16.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Anh Hùng Bàn Phím', 'https://www.youtube.com/watch?v=15aH6LQ9FfI');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim19ad.html?gf=ee37a6ab-8d36-4a56-986e-05d07e2cb2d9">Anh
                                                        Hùng Bàn Phím</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hồi Hộp, Tội Phạm</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 106
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', 'ee37a6ab-8d36-4a56-986e-05d07e2cb2d9', 'Anh Hùng Bàn Phím', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/18/400wx633h-200926-180424-62.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('B4S - Trước Giờ &amp;sv&amp;Yêu&amp;sv&amp;', 'https://www.youtube.com/watch?v=GHmq0amBZPg&amp;t=4s');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phimae4c.html?gf=ea31e5ce-5be2-4aff-93df-90f38e550ca0">B4S
                                                        - Trước Giờ "Yêu"</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hài hước, Tình cảm</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 123
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', 'ea31e5ce-5be2-4aff-93df-90f38e550ca0', 'B4S - Trước Giờ &amp;sv&amp;Yêu&amp;sv&amp;', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/03/31/400x633-7-171143-310324-77.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-13.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Biệt Đội Săn Ma: Kỷ Nguyên Băng Giá', 'https://www.youtube.com/watch?v=Y4Fbcvq-9RU');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim86d1.html?gf=c5c4cffd-a6e4-4b0d-8662-cb6ca7921065">Biệt
                                                        Đội Săn Ma: Kỷ Nguyên Băn...</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hài hước, Phiêu lưu</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 115
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: block;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', 'c5c4cffd-a6e4-4b0d-8662-cb6ca7921065', 'Biệt Đội Săn Ma: Kỷ Nguyên Băng Giá', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/15/400x633-15-131927-150424-42.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-13.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Đóa Hoa Mong Manh', 'https://www.youtube.com/watch?v=11atDusAyWo');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phimcd87.html?gf=9699786e-7080-44c9-aef5-f6820a2c8c90">Đóa
                                                        Hoa Mong Manh</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Lãng mạn, Tâm lý</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 95
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '9699786e-7080-44c9-aef5-f6820a2c8c90', 'Đóa Hoa Mong Manh', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/03/31/400x633-5-164849-310324-56.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-16.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Exhuma: Quật Mộ Trùng Ma', 'https://www.youtube.com/watch?v=7LH-TIcPqks');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phime4b6.html?gf=717f77f1-dbfb-4398-8b4b-a9f590467ea0">Exhuma:
                                                        Quật Mộ Trùng Ma</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Kinh dị</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 133
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '717f77f1-dbfb-4398-8b4b-a9f590467ea0', 'Exhuma: Quật Mộ Trùng Ma', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/10/wb-400x633-155807-100424-39.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Hào Quang Đẫm Máu', 'https://www.youtube.com/watch?v=F3I6t091MBM');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim5590.html?gf=7d744c07-3386-4270-9841-ea03a1620037">Hào
                                                        Quang Đẫm Máu</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hồi Hộp, Hành động</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 98
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '7d744c07-3386-4270-9841-ea03a1620037', 'Hào Quang Đẫm Máu', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/15/400x633-13-095952-150424-49.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/p.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Mùa Hè Của Luca', 'https://www.youtube.com/watch?v=rbbUsKzZ1a0');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phimbd8b.html?gf=af81946d-6325-4ffe-a80a-d40ce8acf549">Mùa
                                                        Hè Của Luca</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hoạt hình, Phiêu lưu</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 95
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', 'af81946d-6325-4ffe-a80a-d40ce8acf549', 'Mùa Hè Của Luca', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/08/470wx700h-civilwar-224506-080424-17.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-18.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Ngày Tàn Của Đế Quốc', 'https://www.youtube.com/watch?v=cA4wVhs3HC0');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim0f54.html?gf=b533931f-6ae2-4513-91b4-83932a50cd5e">Ngày
                                                        Tàn Của Đế Quốc</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Hành động, Hồi Hộp</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 109
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', 'b533931f-6ae2-4513-91b4-83932a50cd5e', 'Ngày Tàn Của Đế Quốc', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                                    <div class="row">
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="product-item no-padding">
                                                <div class="pi-img-wrapper">
                                                    <img class="img-responsive border-radius-20" alt=""
                                                        src="../files.betacorp.vn/media/images/2024/04/08/400x633-11-223056-080424-39.jpg">
                                                    <span style="position: absolute; top: 10px; left: 10px;">
                                                        <img src="Assets/Common/icons/films/c-13.png"
                                                            class="img-responsive">
                                                    </span>
                                                    <div class="border-radius-20">
                                                        <a href="#product-pop-up"
                                                            onclick="viewTrailer('Người &amp;sv&amp;Bạn&amp;sv&amp; Trong Tưởng Tượng', 'https://www.youtube.com/watch?v=Lj0HODMVSnA');"
                                                            class="fancybox-fast-view"><i
                                                                class="fa fa-play-circle"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                                            <div class="film-info film-xs-info">
                                                <h3 class="text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                                    style="max-height: 30px; min-height: 30px;"><a
                                                        href="chi-tiet-phim8484.html?gf=119e0233-79f6-434f-b706-9bbc0ca44e88">Người
                                                        "Bạn" Trong Tưởng Tượng</a>
                                                </h3>
                                                <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                                    <li style="max-height: 50px;"><span class="bold">
                                                            Thể loại:</span> Kinh dị</li>
                                                    <li><span class="bold">
                                                            Thời lượng:</span> 104
                                                        phút
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center padding-bottom-30" style="min-height: 85px;">
                                                <a style="display: none;" href="#showtimes-pop-up"
                                                    onclick="viewsShowtimes('dfd9306f-fbc8-4807-a8c6-5e6c3f7ad71c', '119e0233-79f6-434f-b706-9bbc0ca44e88', 'Người &amp;sv&amp;Bạn&amp;sv&amp; Trong Tưởng Tượng', 'Beta Thái Nguyên');"
                                                    class="btn btn-2 btn-mua-ve2 fancybox-fast-view"><span><i
                                                            class="fa fa-ticket mr3"></i></span>
                                                    MUA VÉ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                        </div>
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
