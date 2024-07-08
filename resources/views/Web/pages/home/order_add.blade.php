@extends('Web.layouts.layout')

@section('title', 'Đặt vé')

@section('content')
<?php	 
    $code = 'CAM-' . time();
?>
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
            <div class="col-sm-10">
                <div class="danhsachghe">
                    <?php	 foreach($showtime['map'] as $k => $v) { ?>
                    <div data-key="<?php echo $k; ?>" <?php echo $v !=0 ? 'onclick="select_ghe(this)"' :'';?>
                        class="item
                        <?php echo $v == 0 ? 'lock':'';?>">
                        <?php echo $k;?>
                    </div>
                    <?php	 } 	 ?>
                </div>
                <div class="mt-4">
                    <div class="order-box" style="max-width: 300px;">
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
                        <br>
                        <div class="option-list">

                        </div>
                        <div class="ghichu">
                            <textarea class="order-note" name="" id="" placeholder="Lời nhắn"></textarea>
                        </div>
                        <?php	 /* 	 ?>
                        <hr>
                        <div class="qr-code">
                            <div class="d-flex">
                                <p>
                                    nội dung chuyển khoản:
                                </p>
                                <h3 class="">
                                    <?php echo $code; ?>
                                </h3>
                            </div>
                            <div class="img">
                                <img src="https://th.bing.com/th/id/OIP.7xGQKpUtezOy0cDWXQExxQHaHa?rs=1&pid=ImgDetMain"
                                    alt="">
                            </div>
                            <p>
                                Lưu ý, sau khi chuyển khoản, bạn sẽ nhận được mail thông báo!
                            </p>
                        </div> */ ?>
                        <br>
                        <div class="btn-datve">
                            <a style="display: block;" href="javascript:;"
                                class="btn btn-2 btn-mua-ve2 fancybox-fast-view" onclick="show_modal_thanhtoan()">
                                <span>
                                    <i class="fa fa-ticket mr3"></i>
                                </span>
                                Thanh toán
                            </a>
                        </div>
                        <div>
                            <p>&nbsp;</p>
                            <p class="text-danger">Liên hệ hotline: 0812 345 678 khi xảy ra lỗi để được hỗ
                                trợ!</p>
                        </div>
                    </div>
                    <div class="chuthich">
                        <div class="item lock" style="background-color: green !important;">
                            tên ghế
                        </div>
                        <span>Tên bạn chọn</span>
                    </div>
                    <div class="chuthich">
                        <div class="item lock">
                            tên ghế
                        </div>
                        <span>Tên ghế đã được chọn</span>
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <h3>Chọn nước, bỏng ngô</h3>
                <div class="order-option">
                    <?php	 if(isset($options)){ 
                            foreach($options as $v) {	 ?>
                    <div class="order-option-item">
                        <div class="img">
                            <img src="<?php echo $v['image']?>" alt="">
                        </div>
                        <div class="content">
                            <h4>
                                <?php	 echo $v['title']; 	 ?>
                            </h4>
                            <div class="des">
                                <?php	 echo $v['content']; 	 ?>
                            </div>
                            <div class="price">
                                <?php	 echo  number_format($v['price']); 	 ?> vnđ
                            </div>
                            <div class="add-option">
                                <a style="display: inline-block;" href="javascript:;"
                                    class="btn btn-2 " data-id="<?php echo $v['id']; ?>" data-price="<?php echo $v['price']; ?>"
                                    onclick="add_option(this)" ;="">
                                    Thêm
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php	 } 	 ?>
                    <?php	 } 	 ?>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="total_price" value="0">
<input type="hidden" id="total_option" value="0">
<input type="hidden" id="price" value="<?php echo $showtime['price'] ?>">
<input type="hidden" id="showtime_id" value="<?php echo $showtime['id'] ?>">
<input type="hidden" id="order_code" value="<?php echo $code; ?>">
<!-- Modal -->
<div class="modal fade" id="modal-thanhtoan" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Vui lòng chuyển khoản với mã QR bên dưới</h4>
            </div>
            <div class="modal-body">
                <div class="qr-code">
                    <div class="d-flex">
                        <p>
                            nội dung chuyển khoản:
                        </p>
                        <h3 class="">
                            <?php echo $code; ?>
                        </h3>
                    </div>
                    <div class="img" style="padding: 15px;">
                        <img style="max-height: 300px; object-fit: contain;"
                            src="https://th.bing.com/th/id/OIP.7xGQKpUtezOy0cDWXQExxQHaHa?rs=1&pid=ImgDetMain" alt="">
                    </div>
                    <p>
                        Lưu ý, sau khi chuyển khoản, bạn sẽ nhận được mail thông báo!
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-2 fancybox-fast-view " data-id="<?php echo $v['id'];?>"
                    data-price="<?php echo $v['price'];?>" onclick="datve_submit()">Mua vé</button>
                <button type="button" class="btn " data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


@stop


{{-- impoort thư viện js--}}
@section('scripts')
<script>
    const option_nuoc = JSON.parse('<?php echo json_encode($option_nuoc); ?>');
    const option_bong = JSON.parse('<?php echo json_encode($option_bong); ?>');
    console.log(option_nuoc);
    console.log(option_bong);
</script>
@stop