@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-uppercase bold"><a class="link-text" href="/khuyen-mai-moi.htm"><?php echo $data['node']['title']; ?></a></h1>
        <?php	 if(count($data['new']) > 0) { 	
            $item1 = $data['new'][0]; ?>
        <div class="col-md-8 margin-bottom-30" style="height: 415px;">
            <div class="mix-inner border-radius-10" style="height: 415px; position: relative; overflow: hidden;">
                <img src="<?php echo $item1['image']; ?>" class="scale"
                    style="position: absolute; top: -0.28125px; left: 0px; width: 545px; height: 416px; max-width: none;">
            </div>
            <div class="padding-15"
                style="position: absolute; bottom: 0px;padding: 15px;background: rgba(254, 121, 0, 0.6) none repeat scroll 0 0;left: 0px;margin: 0px 15px; border-radius: 0px 0px 10px 10px !important;">
                <h2 class="no-margin">
                    <a style="color: #fff;" href="<?php echo $DOMAIN . $item1['slug']; ?>">
                        <?php echo $item1['title']; ?><span style="font-size:20px;color:#03599d;"></span>
                    </a>
                </h2>
            </div>
        </div>
        <?php	 } 	 ?>

        <?php	 if(count($data['new']) > 1)  {	 ?>
        <?php	 foreach($data['new'] as $v) { 	 ?>
        <div class="col-md-4 margin-bottom-30">
            <div class="border-radius-10">
                <a href="<?php echo $DOMAIN . $v['slug']; ?>">
                    <div class="mix-inner"
                        style="height: 207.5px; border-radius: 10px 10px 0px 0px !important; position: relative; overflow: hidden;">
                        <img src="<?php echo $v['image']; ?>" class="scale"
                            style="position: absolute; top: -1.42109e-14px; left: -7.61741px; width: 273px; height: 208px; max-width: none;">
                    </div>
                </a>
                <div class="padding-15">
                    <h4><a style="color: #000;" href="<?php echo $DOMAIN . $v['slug']; ?>">
                            <?php echo $v['title']; ?><span style="font-size:14px;color:#03599d;"></span>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <?php	 } 	 ?>
        <?php	 } 	 ?>
        <?php	 /* 	 ?>
        <div class="col-md-4 margin-bottom-30" style="height: 415px;">
            <div class="border-radius-10" style="height: 415px;">
                <a href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">
                    <div class="mix-inner"
                        style="height: 207.5px; border-radius: 10px 10px 0px 0px !important; position: relative; overflow: hidden;">
                        <img src="https://files.betacorp.vn//media/images/2024/05/17/luong-kho-mini-minh-cung-nham-nhi-545-x-415-092337-170524-79.png"
                            class="scale"
                            style="position: absolute; top: -1.42109e-14px; left: -7.61741px; width: 273px; height: 208px; max-width: none;">
                        <div style="font-size:19px;display: none;">Hết mã voucher</div>
                    </div>
                </a>
                <div class="padding-15">
                    <h4><a style="color: #000;" href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">LƯƠNG KHÔ
                            MINI - MÌNH CÙNG NHÂM NHI<span style="font-size:14px;color:#03599d;"></span></a></h4>
                    <p class="text-justify">
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 margin-bottom-30">
            <div class="border-radius-10">
                <a href="/khuyen-mai-moi/uu-dai-boc-co-rockstar.htm">
                    <div class="mix-inner"
                        style="height: 207.5px; border-radius: 10px 10px 0px 0px !important; position: relative; overflow: hidden;">
                        <img src="https://files.betacorp.vn//media/images/2024/05/17/uu-dai-boc-co-rockstar-545x415-090350-170524-21.png"
                            class="scale"
                            style="position: absolute; top: -25px; left: 0px; width: 258px; height: 258px; max-width: none;">
                        <div style="font-size:19px;display: none;">Hết mã voucher</div>
                    </div>
                </a>
                <div class="padding-15">
                    <h4><a style="color: #000;" href="/khuyen-mai-moi/uu-dai-boc-co-rockstar.htm">ƯU ĐÃI BỐC- CÓ
                            ROCKSTAR<span style="font-size:14px;color:#03599d;"></span></a></h4>
                    <p class="text-justify">
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 margin-bottom-30">
            <div class="border-radius-10">
                <a href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">
                    <div class="mix-inner"
                        style="height: 207.5px; border-radius: 10px 10px 0px 0px !important; position: relative; overflow: hidden;">
                        <img src="https://files.betacorp.vn//media/images/2024/05/13/combo-groupsale-545-x-415-2-174750-130524-54.png"
                            class="scale"
                            style="position: absolute; top: -1.42109e-14px; left: -7.61741px; width: 273px; height: 208px; max-width: none;">
                        <div style="font-size:19px;display: none;">Hết mã voucher</div>
                    </div>
                </a>
                <div class="padding-15">
                    <h4><a style="color: #000;" href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">XEM CÀNG ĐÔNG -
                            GIÁ CÀNG SỐC<span style="font-size:14px;color:#03599d;"></span></a></h4>
                    <p class="text-justify">

                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 margin-bottom-30">
            <div class="border-radius-10">
                <a href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">
                    <div class="mix-inner"
                        style="height: 207.5px; border-radius: 10px 10px 0px 0px !important; position: relative; overflow: hidden;">
                        <img src="https://files.betacorp.vn//media/images/2024/04/22/545x415-1-133943-220424-28.jpg"
                            class="scale"
                            style="position: absolute; top: -1.42109e-14px; left: -7.57831px; width: 273px; height: 208px; max-width: none;">
                        <div style="font-size:19px;display: none;">Hết mã voucher</div>
                    </div>
                </a>
                <div class="padding-15">
                    <h4><a style="color: #000;"
                            href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">Quét QR nhận quà 20K
                            và X3 Xu MoMo Rewards!<span style="font-size:14px;color:#03599d;"></span></a></h4>
                    <p class="text-justify">

                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 margin-bottom-30">
            <div class="border-radius-10">
                <a href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">
                    <div class="mix-inner"
                        style="height: 207.5px; border-radius: 10px 10px 0px 0px !important; position: relative; overflow: hidden;">
                        <img src="https://files.betacorp.vn//media/images/2024/04/16/339090620-769688404468201-6997705945754521027-n-113050-160424-59.jpg"
                            class="scale"
                            style="position: absolute; top: -1.42109e-14px; left: -7.57831px; width: 273px; height: 208px; max-width: none;">
                        <div style="font-size:19px;display: none;">Hết mã voucher</div>
                    </div>
                </a>
                <div class="padding-15">
                    <h4><a style="color: #000;" href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">BETA VÉ RẺ, MOMO MUA
                            LIỀN!<span style="font-size:14px;color:#03599d;"></span></a></h4>
                    <p class="text-justify">

                    </p>
                </div>
            </div>
        </div> */ ?>

    </div>
</div>
@stop