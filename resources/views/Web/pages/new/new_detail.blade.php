@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')
<div class="container">
    <div class="row">
        <div id="BodyContent_ctl00_leftPanel" class="ecm-panel col-lg-8">
            <!--//========================== NEWS INFO ================================//-->
            <div class="news-info margin-top-20 margin-sm-top-20 margin-xs-top-20">
                <div id="printContent">
                    <div class="col-md-16 col-sm-16 col-xs-16">
                        <div id="BodyContent_ctl00_ctl04_showImage" class="text-center"
                            style="margin-bottom: 10px; text-align: center; display: none;">
                            <a href="<?php echo $data['new']['image']; ?>" title="" class="swipebox">
                                <img src="<?php echo $data['new']['image']; ?>" class="img-responsive"
                                    style="display: initial;"></a>
                        </div>
                        <br>
                        <h2 class="no-margin">
                            <?php echo $data['node']['title']; ?>
                        </h2>
                        <h4>
                            <span id="BodyContent_ctl00_ctl04_newsContent">
                                <?php echo $data['new']['description']; ?>
                            </span>
                        </h4>
                    </div>
                    <div class="col-md-16 col-sm-16 col-xs-16 font-family-san font-16" id="divNewsDetails">
                        <p><img alt="" src="<?php echo $data['new']['image']; ?>" style="width: 100%; height: 100%;">
                        </p>
                        <?php	 echo $data['new']['content']; 	 ?>
                    </div>
                </div>
                <!--Tin bài liên quan-->
                <?php	 /* 	 ?>
                <div style="display: normal">
                    <div class="col-lg-16">
                        <h1 class="text-uppercase margin-bottom-30"><a style="color: #000;">Tin tức khác</a></h1>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/don-cap-meo-u-uu-dai-da-nu.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/23/545x415-2-133356-230524-75.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.3197px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="ĐÓN CẶP MÈO Ú - ƯU ĐÃI ĐÃ NƯ"
                                    href="/khuyen-mai-moi/don-cap-meo-u-uu-dai-da-nu.htm">ĐÓN CẶP MÈO Ú - ƯU ĐÃI ĐÃ
                                    NƯ</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/combo-hoc-sinh-uu-dai-cuc-dinh.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/21/combo-hoc-sinh-sinh-vien-545-x-415-2-142413-210524-60.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.436px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="COMBO HỌC SINH - ƯU ĐÃI CỰC ĐỈNH"
                                    href="/khuyen-mai-moi/combo-hoc-sinh-uu-dai-cuc-dinh.htm">COMBO HỌC SINH - ƯU ĐÃI
                                    CỰC ĐỈNH</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/17/luong-kho-mini-minh-cung-nham-nhi-545-x-415-092337-170524-79.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.436px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="LƯƠNG KHÔ MINI - MÌNH CÙNG NHÂM NHI"
                                    href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">LƯƠNG KHÔ MINI - MÌNH
                                    CÙNG NHÂM NHI</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/13/combo-groupsale-545-x-415-2-174750-130524-54.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.436px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="XEM CÀNG ĐÔNG - GIÁ CÀNG SỐC"
                                    href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">XEM CÀNG ĐÔNG - GIÁ CÀNG
                                    SỐC</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/04/22/545x415-1-133943-220424-28.jpg"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.4157px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="Quét QR nhận quà 20K và X3 Xu MoMo Rewards!"
                                    href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">Quét QR nhận
                                    quà 20K và X3 Xu MoMo Rewards!</a>
                            </h4>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/04/16/339090620-769688404468201-6997705945754521027-n-113050-160424-59.jpg"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.4157px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="BETA VÉ RẺ, MOMO MUA LIỀN!"
                                    href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">BETA VÉ RẺ, MOMO MUA LIỀN!</a>
                            </h4>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/thanh-vien-beta-dong-gia-45k.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//cms/images/2024/04/03/545x415-member-130929-030424-88.jpg"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.4157px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="THÀNH VIÊN BETA - ĐỒNG GIÁ 45K/50K"
                                    href="/khuyen-mai-moi/thanh-vien-beta-dong-gia-45k.htm">THÀNH VIÊN BETA - ĐỒNG GIÁ
                                    45K/50K</a>
                            </h4>
                        </div>
                    </div>
                </div>
                */ ?>
            </div>
        </div>
        <div id="BodyContent_ctl00_rightPanel" class="ecm-panel col-lg-8">
            <div class="margin-top-40 margin-xs-top-0 pull-left">
                <h1 class="text-uppercase text-center bold margin-bottom-20">Phim đang hot</h1>
                <?php	 if(isset($film_featureds)) {
                    foreach($film_featureds as $v) {	 ?>
                <div
                    class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-bottom-15 padding-right-0 padding-md-right-15 padding-sm-right-15 padding-xs-right-15">
                    <div class="product-item no-padding">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" alt="" src="<?php echo $v['image']; ?>">
                        </div>
                    </div>
                    <div style="height: 70px;">
                        <h4 class="text-center bold margin-top-5 font-xs-large" style="max-height: 70px;"><a
                                href="<?php echo $DOMAIN . $v['slug']; ?>">
                                <?php echo $v['title']?>
                            </a>
                        </h4>
                    </div>
                </div>
                <?php	 } 	 ?>
                <?php	 } 	 ?>
            </div>
        </div>
    </div>
</div>
@stop