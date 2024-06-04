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
                        <div class="">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <br>
                                    <br>
                                    <a style="display: block;" href="javascript:;"
                                        class="btn btn-2 btn-mua-ve2 fancybox-fast-view"
                                        onclick="show_modal_order(<?php echo $data['node']['id'];?>)" >
                                        <span>
                                            <i class="fa fa-ticket mr3"></i>
                                        </span>
                                        MUA VÉ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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