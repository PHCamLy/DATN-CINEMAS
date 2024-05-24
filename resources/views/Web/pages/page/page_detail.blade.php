@extends('Web.layouts.layout')

@section('title', $data['node']['title'])

@section('content')
<div class="container">
    <!-- TABS -->
    <div class="row margin-bottom-35 margin-top-40">
        <div class="col-lg-3 col-md-3">
            <ul class="nav nav-tabs tabs-left text-uppercase tab-information">
                <?php	if(isset($categories['footer_1'])) { 
                    foreach($categories['footer_1'] as $v) {
                ?>
                <li class="border-radius-0 <?php echo $v['node_id'] == $data['node']['id'] ? 'active' : ''; ?>">
                    <a class="font-16" href="<?php echo $DOMAIN . $v['slug']; ?>" data-toggle="tab"
                        aria-expanded="true">
                        <?php	 echo $v['title']; 	 ?>
                    </a>
                </li>
                <?php	 } 	 ?>
                <?php	 } 	 ?>

            </ul>
        </div>
        <div class="col-lg-13 col-md-13">
            <div class="tab-content font-family-san font-16">
                <div class="tab-pane fade active in" id="tab-1">
                    <div class="text-center">
                    </div>
                    <div class="page-banner">
                        <img width="100%" src="<?php echo $data['category']['image']; ?>" alt="">
                    </div>
                    <div class="page-des">
                        <?php	 echo $data['category']['description']; 	 ?>
                    </div>
                    <div class="page-content">
                        <?php	 echo $data['category']['content']; 	 ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TABS -->
</div>
@stop