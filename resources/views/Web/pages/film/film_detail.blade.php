@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')

<div class="margin-none">
    <div id="BodyContent_ctl00_sliderPanel" class="ecm-panel sliderpanel">

    </div>
    <div id="BodyContent_ctl00_mainPanel" class="ecm-panel" style="position: relative;">
        <form method="post" action="" id="ctl00">
            <div class="aspNetHidden">
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                    value="YVNOFCeIzLOi+DbsUTVBv/ORXF5hsvsCH6PibfHqgAwnp2oAdwpq/nUboHcKs+3N0N2fcc4yJj4r7onYLppuhj7XvQthob+PDhNH3LcDT8Q=">
            </div>

            <div class="aspNetHidden">

                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3989C74E">
            </div>
            <div class="container">
                <h3 class="margin-bottom-20">Trang chủ &gt;
                    <span class="color1">
                        <?php echo $data['node']['title']; ?>
                    </span>
                </h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-16">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" style="width: 100%" alt=""
                                src="<?php echo $data['film']['image']; ?>">
                            <span style="position: absolute; top: 10px; left: 10px;">
                                <img src="<?php echo $data['film']['image']; ?>" class="img-responsive">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-16 padding-xs-top-15">
                        <h1 class="bold no-margin margin-bottom-15 film-title">
                            <?php	 echo $data['node']['title']; 	 ?>
                        </h1>

                        <p class="margin-bottom-15 font-lg font-family-san text-justify">
                            <?php	 echo $data['film']['description']; 	 ?>
                        </p>

                        <div class="row font-lg font-family-san font-xs-14">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <span class="bold font-transform-uppercase">
                                    Đạo diễn: </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <?php echo $data['film']['director']; ?>
                            </div>
                        </div>
                        <div class="row font-lg font-family-san font-xs-14">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <span class="bold font-transform-uppercase">
                                    Diễn viên: </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <?php echo $data['film']['characters']; ?>
                            </div>
                        </div>
                        <div class="row font-lg font-family-san font-xs-14">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <span class="bold font-transform-uppercase">
                                    Thể loại: </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <?php echo $data['film']['genres']; ?>
                            </div>
                        </div>
                        <div class="row font-lg font-family-san font-xs-14">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <span class="bold font-transform-uppercase">
                                    Thời lượng: </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <?php echo $data['film']['time']; ?>
                            </div>
                        </div>
                        <div class="row font-lg font-family-san font-xs-14">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <span class="bold font-transform-uppercase">
                                    Ngôn ngữ: </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <?php echo $data['film']['language']; ?>
                            </div>
                        </div>
                        <div class="row font-lg font-family-san font-xs-14">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <span class="bold font-transform-uppercase">
                                    Ngày khởi chiếu: </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                                <?php echo $data['film']['release_date']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- TABS -->
                    <div class="col-md-16 tab-style-1 margin-bottom-35">
                        <ul class="nav nav-tabs dayofweek"
                            style="margin-bottom: 10px; margin-left: 1%; margin-right: 1%;">
                            <li class="">
                                <a href="#145"
                                    onclick="tabClick('145', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="145" aria-expanded="false"><span
                                        class="font-38 font-s-35">24</span>/05 - T6
                                </a>
                            </li>
                            <li class="">
                                <a href="#146"
                                    onclick="tabClick('146', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="146" aria-expanded="false"><span
                                        class="font-38 font-s-35">25</span>/05 - T7
                                </a>
                            </li>

                            <li class="">
                                <a href="#147"
                                    onclick="tabClick('147', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="147" aria-expanded="false"><span
                                        class="font-38 font-s-35">26</span>/05 - CN</a>
                            </li>

                            <li class="">
                                <a href="#148"
                                    onclick="tabClick('148', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="148" aria-expanded="false"><span
                                        class="font-38 font-s-35">27</span>/05 - T2</a>
                            </li>

                            <li class="">
                                <a href="#149"
                                    onclick="tabClick('149', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="149" aria-expanded="false"><span
                                        class="font-38 font-s-35">28</span>/05 - T3</a>
                            </li>

                            <li class="">
                                <a href="#150"
                                    onclick="tabClick('150', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="150" aria-expanded="false"><span
                                        class="font-38 font-s-35">29</span>/05 - T4</a>
                            </li>

                            <li class="active">
                                <a href="#151"
                                    onclick="tabClick('151', '66e4bf4a-762b-4026-8e09-5de16190d79a', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu')"
                                    data-toggle="tab" class="dayofweek active" id="151" aria-expanded="true">
                                    <span class="font-38 font-s-35">30</span>/05 - T5
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content">
                            <div class="tab-pane fade in active" id="151">
                                <div class="row">
                                    <div class="col-md-16 col-sm-16 col-xs-16"
                                        style="margin-bottom:10px;margin-top: 10px;"><span
                                            class="font-lg bold font-transform-uppercase">2D Lồng tiếng</span></div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', '9aabf982-02aa-466f-afe7-4c4b021fa2ff', '09:30', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">09:30</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">170 ghế trống
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', '6cc6acbd-3cbd-44c1-9f7c-7c2aaf53b929', '11:40', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">11:40</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">
                                            136 ghế trống
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', '06436fda-ee82-4c9d-b009-47eab48a2062', '14:00', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">14:00</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">170 ghế trống</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', '3010e903-e234-4a20-bf81-71a0f046d448', '16:00', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">16:00</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">170 ghế trống</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', 'c4c4f1fd-6ed0-4bfa-9d85-c0938a44c06e', '18:00', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">18:00</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">170 ghế trống</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', 'dafc1e58-dbf7-4695-a719-16d2ee63916b', '18:40', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">18:40</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">136 ghế trống</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', '886b7925-0e4e-4d6f-b226-bde9351d1b08', '20:00', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">20:00</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">170 ghế trống</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', '55b925ff-4589-4daa-b752-eb28ae8d246f', '22:00', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">22:00</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">170 ghế trống</div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 text-center">
                                        <a style="width:100%"
                                            onclick="bookingSeat('Beta Thái Nguyên', '864b0825-5c91-485f-b1c1-0748d081ed4c', 'a6d77279-d630-4102-a04e-f999d088dee4', '23:15', '30/05/2024', 'Doraemon: Nobita và Bản Giao Hưởng Địa Cầu');"
                                            class="btn default">23:15</a>
                                        <div class="font-smaller padding-top-5 padding-bottom-10">136 ghế trống</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- END TABS -->
                </div>
            </div>
            <div class="fullwidthbanner-container">
                <div class="container">
                    <div class="text-center margin-top-20">
                        <ul class="nav tab-films">
                            <li class="active">
                                <a data-toggle="tab" class="no-padding">
                                    <h1 style="color: #fff;" class="bold">TRAILER</h1>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row margin-bottom-20">
                        <div class="col-md-12 col-md-offset-2 margin-bottom-35">
                            <div class="iframe-youtobe">
                                <?php echo html_entity_decode($data['film']['trailer']); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop