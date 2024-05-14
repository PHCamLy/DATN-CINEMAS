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
                                            <h5 class="mb-0">120</h5>
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
                                            <h5 class="mb-0">86</h5>
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
                                            <h5 class="mb-0">4,235</h5>
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
                    <!-- end row -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-start">
                                <h5 class="card-title me-2">Visitors</h5>
                                <div class="ms-auto">
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

                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Today</p>
                                        <h5>1024</h5>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">This Month</p>
                                        <h5>12356 <span class="text-success font-size-13">0.2 % <i
                                                    class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <p class="text-muted mb-1">This Year</p>
                                        <h5>102354 <span class="text-success font-size-13">0.1 % <i
                                                    class="mdi mdi-arrow-up ms-1"></i></span></h5>
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
                            <div class="d-flex flex-wrap align-items-start">
                                <h5 class="card-title mb-3 me-2">Subscribes</h5>

                                <div class="dropdown ms-auto">
                                    <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div>
                                    <p class="text-muted mb-1">Total Subscribe</p>
                                    <h4 class="mb-3">10,512</h4>
                                    <p class="text-success mb-0"><span>0.6 % <i
                                                class="mdi mdi-arrow-top-right ms-1"></i></span></p>
                                </div>
                                <div class="ms-auto align-self-end">
                                    <i class="bx bx-group display-4 text-light"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3 me-2">Order today</h5>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;" class="align-middle">
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle">Order ID</th>
                                            <th class="align-middle">Billing Name</th>
                                            <th class="align-middle">Date</th>
                                            <th class="align-middle">Total</th>
                                            <th class="align-middle">Payment Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                    <label class="form-check-label" for="orderidcheck01"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a>
                                            </td>
                                            <td>Neal Matthews</td>
                                            <td>
                                                07 Oct, 2019
                                            </td>
                                            <td>
                                                $400
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck02">
                                                    <label class="form-check-label" for="orderidcheck02"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a>
                                            </td>
                                            <td>Jamal Burnett</td>
                                            <td>
                                                07 Oct, 2019
                                            </td>
                                            <td>
                                                $380
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck03">
                                                    <label class="form-check-label" for="orderidcheck03"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a>
                                            </td>
                                            <td>Juan Mitchell</td>
                                            <td>
                                                06 Oct, 2019
                                            </td>
                                            <td>
                                                $384
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck04">
                                                    <label class="form-check-label" for="orderidcheck04"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a>
                                            </td>
                                            <td>Barry Dick</td>
                                            <td>
                                                05 Oct, 2019
                                            </td>
                                            <td>
                                                $412
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck05">
                                                    <label class="form-check-label" for="orderidcheck05"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a>
                                            </td>
                                            <td>Ronald Taylor</td>
                                            <td>
                                                04 Oct, 2019
                                            </td>
                                            <td>
                                                $404
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck06">
                                                    <label class="form-check-label" for="orderidcheck06"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a>
                                            </td>
                                            <td>Jacob Hunter</td>
                                            <td>
                                                04 Oct, 2019
                                            </td>
                                            <td>
                                                $392
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                            </td>
                                        </tr>

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
<script src="{{ asset('admin/assets/js/pages/dashboard-blog.init.js') }}"></script>

@stop