@extends('Admin.layouts.layout')

@section('title', 'Đăng nhập quản trị')

{{-- impoort thư viện css --}}
@section('style-libraries')

@stop

{{-- <!-- 
@section('breadcrumb')
@include('Web.element.breadcrumb')
@stop --> --}}

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-muted mb-2">Total Film</p>
                                            <h5 class="mb-0">
                                                <?php echo $data['film']; ?>
                                            </h5>
                                        </div>
                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-book-bookmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card blog-stats-wid">
                                <div class="card-body">

                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-muted mb-2">Tin tức</p>
                                            <h5 class="mb-0">
                                                <?php echo $data['news']; ?>
                                            </h5>
                                        </div>

                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-note"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card blog-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-muted mb-2">Comments</p>
                                            <h5 class="mb-0">
                                                <?php echo $data['comment']; ?>
                                            </h5>
                                        </div>
                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-message-square-dots"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-muted mb-2">Tổng User</p>
                                            <h5 class="mb-0">
                                                <?php echo $data['user']; ?>
                                            </h5>
                                        </div>
                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bx-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card blog-stats-wid">
                                <div class="card-body">

                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-muted mb-2">Tổng liên hệ</p>
                                            <h5 class="mb-0">
                                                <?php echo $data['contact']; ?>
                                            </h5>
                                        </div>

                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bxs-user-detail"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card blog-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3">
                                            <p class="text-muted mb-2">Tổng order</p>
                                            <h5 class="mb-0">
                                                <?php echo $data['order_full_total']; ?>
                                            </h5>
                                        </div>
                                        <div class="avatar-sm ms-auto">
                                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                <i class="bx bx-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-start">
                                <h5 class="card-title me-2">Thống kê doanh thu</h5>
                                <div class="ms-auto">
                                    <?php	 /* 	 ?>
                                    <div class="toolbar d-flex flex-wrap gap-2 text-end">
                                        <button type="button" class="btn btn-light btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm active">
                                            1Y
                                        </button>

                                    </div> */ ?>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-3">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Hôm nay</p>
                                        <h5>
                                            <?php echo number_format($data['order_homnay']) ?>
                                        </h5>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">7 ngày qua</p>
                                        <h5>
                                            <?php echo number_format($data['order_7d']) ?>
                                        </h5>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Tháng này</p>
                                        <h5>
                                            <?php echo number_format($data['order_thangnay']) ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Tổng thời gian</p>
                                        <h5>
                                            <?php echo number_format($data['order_full_price']) ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="apex-charts" id="area-chart" dir="ltr"></div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h5 class="card-title mb-3 me-2">Đơn đặt vé gần đây</h5>
                                <a class="btn btn-success ms-3"
                                    href="<?php echo $DOMAIN .'admin/order/order_list'?>">Xem chi
                                    tiết</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="align-middle">Order ID</th>
                                            <th class="align-middle">Tên khách hàng</th>
                                            <th class="align-middle">Ngày đặt</th>
                                            <th class="align-middle">Tổng tiền</th>
                                            <th class="align-middle">Trạng thái</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php	 if(isset($data['order']) && count($data['order']) > 0) { 
                                            foreach($data['order'] as $v) {	 ?>
                                        <tr>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">
                                                    <?php echo $v['code']; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $v['fullname'] . ' <br> ' . $v['phone']?>
                                            </td>
                                            <td>
                                                <?php	 echo date('d-m-Y',$v['created']); 	 ?>
                                            </td>
                                            <td>
                                                <?php	 echo number_format($v['cart_sum']); 	 ?>
                                            </td>
                                            <td>
                                                <?php	 if($v['status'] == 1) { 	 ?>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Đã thanh
                                                    toán</span>
                                                <?php	 }else { 	 ?>
                                                <span class="badge badge-pill badge-soft-danger font-size-12">Chưa thanh
                                                    toán</span>
                                                <?php	 } 	 ?>
                                            </td>
                                        </tr>
                                        <?php	 } 	 ?>
                                        <?php	 } 	 ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
@stop

{{-- impoort thư viện js--}}
@section('scripts')

<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- dashboard blog init -->
<script>
    var data_char = JSON.parse('<?php echo  json_encode($data['data_chart_order']); ?>');
</script>
<script src="{{ asset('admin/assets/js/pages/dashboard-blog.init.js') }}"></script>

@stop