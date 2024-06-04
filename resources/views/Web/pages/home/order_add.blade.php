@extends('Web.layouts.layout')

@section('title', 'Đặt vé')

@section('content')
<div class="page-order">
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
                        <?php echo number_format($showtime['price']); ?> vnđ
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-16">
                <h3>Chọn ghế</h3>
            </div>
            <div class="col-sm-12">
                <div class="danhsachghe">
                    <?php	 foreach($showtime['map'] as $k => $v) { ?>
                    <div data-key="<?php echo $k; ?>" <?php echo $v !=0 ? 'onclick="select_ghe(this)"' :'';?>
                        class="item
                        <?php echo $v == 0 ? 'lock':'';?>">
                        <?php echo $k;?>
                    </div>
                    <?php	 } 	 ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="order-box">
                    <div class="row font-lg font-family-san font-xs-14">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <span class="bold font-transform-uppercase">
                                Số lượng: </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                            <span class="sl">0</span>
                        </div>
                    </div>
                    <div class="row font-lg font-family-san font-xs-14">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <span class="bold font-transform-uppercase">
                                Giá: </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                            <span class="gia">0</span>
                        </div>
                    </div>
                    <hr>
                    <div class="btn-datve">
                        <a style="display: block;" href="javascript:;" class="btn btn-2 btn-mua-ve2 fancybox-fast-view"
                            onclick="datve_submit()" ;="">
                            <span>
                                <i class="fa fa-ticket mr3"></i>
                            </span>
                            MUA VÉ
                        </a>
                    </div>
                </div>
                <div class="chuthich">
                    <div class="item lock">
                        tên ghế
                    </div>
                    <span>Tên ghế đã được chọn</span>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="total_price" value="0">
<input type="hidden" id="price" value="<?php echo $showtime['price'] ?>">
<input type="hidden" id="showtime_id" value="<?php echo $showtime['id'] ?>">
@stop


{{-- impoort thư viện js--}}
@section('scripts')
<script>

</script>
@stop