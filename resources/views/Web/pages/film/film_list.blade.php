@extends('Web.layouts.layout')

@section('title', $category['title'])

@section('content')
<div class="page-film-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <h2 class="p-f-title">
                    <?php echo $category['title']; ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php	 foreach($data['film'] as $c) { 	 ?>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-16 padding-right-30 padding-left-30 padding-bottom-30">
                <div class="row">
                    <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                        <div class="product-item no-padding">
                            <div class="pi-img-wrapper">
                                <img class="img-responsive border-radius-20" alt="" src="<?php echo $c['image']; ?>">
                                <span style="position: absolute; top: 10px; left: 10px;">
                                    <img src="#" class="img-responsive">
                                </span>
                                <div class="border-radius-20">
                                    <a href="#product-pop-up"
                                        onclick="viewTrailer('<?php echo $c['title'] ?>', '<?php echo $c['trailer']?>');"
                                        class="fancybox-fast-view"><i class="fa fa-play-circle"></i></a>
                                </div>
                            </div>
                            <div class="sticker sticker-new"></div>
                        </div>
                    </div>
                    <div class="col-lg-16 col-md-16 col-sm-8 col-xs-8">
                        <div class="film-info film-xs-info">
                            <h3 class="film-text text-center text-sm-left text-xs-left bold margin-top-5 font-sm-18 font-xs-14"
                                style="max-height: 30px; min-height: 30px;"><a
                                    href="<?php	 echo $DOMAIN . $c['slug']; 	 ?>">
                                    <?php	 echo $c['title']; 	 ?>
                                </a>
                            </h3>
                            <ul class="list-unstyled font-lg font-family-san font-sm-15 font-xs-14">
                                <li style="max-height: 50px;"><span class="bold">
                                        Thể loại:</span>
                                    <?php	 echo $c['genres'] 	 ?>
                                </li>
                                <li><span class="bold">
                                        Thời lượng:</span>
                                    <?php echo $c['time'] ?>
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
            <?php	 } 	 ?>
        </div>
    </div>
</div>



@stop