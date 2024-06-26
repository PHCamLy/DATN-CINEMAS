@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')
<div class="margin-none">
    <div class="dashboard space-list">
        <div class="wrap">
            <div class="container">
                <h2 class="title">Thông tin vé</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-16">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" style="width: 100%" alt=""
                                src="<?php echo $film['image']; ?>">
                            <span style="position: absolute; top: 10px; left: 10px;">
                                <img src="<?php echo $film['image']; ?>" class="img-responsive">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-16 padding-xs-top-15">
                        <h1 class="bold no-margin margin-bottom-15 film-title">
                            <?php	 echo $film['title']; 	 ?>
                        </h1>

                        <p class="margin-bottom-15 font-lg font-family-san text-justify">
                            <?php	 echo $film['description']; 	 ?>
                        </p>
                        <div class="row">
                            <div class="col-sm-10">


                                <div class="row font-lg font-family-san font-xs-14">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <span class="bold font-transform-uppercase">
                                            Rạp: </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                        <?php echo $branch_list[$showtime['branch_id']]; ?>
                                    </div>
                                </div>
                                <div class="row font-lg font-family-san font-xs-14">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <span class="bold font-transform-uppercase">
                                            Ngày chiếu: </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                        <?php echo date('d-m-Y',$showtime['hour']); ?>
                                    </div>
                                </div>
                                <div class="row font-lg font-family-san font-xs-14">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <span class="bold font-transform-uppercase">
                                            Giờ chiếu: </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                        <?php echo date('H:i',$showtime['hour']); ?>
                                    </div>
                                </div>
                                <div class="row font-lg font-family-san font-xs-14">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <span class="bold font-transform-uppercase">
                                            Thời lượng: </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                        <?php echo $film['time']; ?>
                                    </div>
                                </div>
                                <div class="row font-lg font-family-san font-xs-14">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <span class="bold font-transform-uppercase">
                                            Giá vé: </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                        <?php echo number_format($order['cart_sum']); ?> vnđ
                                    </div>
                                </div>
                                <div class="row font-lg font-family-san font-xs-14">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <span class="bold font-transform-uppercase">
                                            Trạng thái: </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                        <?php echo ($order['is_user']) == 0 ? 'Chưa kích hoạt' : 'Đã kích hoạt'; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row font-lg font-family-san font-xs-14">
                                    <?php	
                            $option_sl = json_decode(($order['extra']), true);
                            if(isset($option)) {  
                                foreach($option as $v) {	 ?>
                                    <div class="col-lg-12">
                                        <div class="order-option-item">
                                            <div class="img">
                                                <img src="<?php echo $v['image']?>" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    <?php	 echo $v['title']; 	 ?>
                                                </h4>
                                                <div class="price">
                                                    <?php	 echo  number_format($v['price']); 	 ?>
                                                </div>
                                                <div class="price">
                                                    <?php	 echo 'Số lượng: '; 	 ?>
                                                    <?php 
                                            foreach($option_sl as $sl)
                                            {
                                                if($v['id'] == $sl['id'])
                                                {
                                                echo $sl['quantity'];
                                                }
                                            } ?>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <?php	 } 	 ?>
                                    <?php	 } 	 ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="qrcode"></div>
                                <div>
                                    <h4 class="text-danger">Đưa mã này đến quầy quét để kích hoạt vé.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('scripts')
<script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "https:facebook.com");
</script>
@stop