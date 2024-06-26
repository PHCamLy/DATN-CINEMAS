<div id="BodyContent_ctl00_topPanel" class="ecm-panel">
    <input type="hidden" id="hfLanguage" value="vie">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-16 col-sm-16 additional-nav">
                    <?php	 if(Session::get('user') != null ){ 	 ?>
                    <div class="pull-right padding-left-10">
                        <a href="<?php echo $DOMAIN ?>user/dashboad">Hi,
                            <?php echo Session::get('user')['fullname']?>
                        </a>
                    </div>

                    <?php	 } else {	 ?>
                    <div class="pull-right padding-left-10">

                        <a id="BodyContent_ctl00_ctl04_hlEn" onclick="changelang('eng');"><img
                                src="<?php echo $DOMAIN; ?>Assets/Common/icons/united-kingdom.png"
                                class="img-responsive"></a>
                    </div>
                    <ul class="list-unstyled list-inline pull-right" style="margin-bottom: 4px;margin-top: 4px;">
                        <li id="BodyContent_ctl00_ctl04_liLogin"><a href="<?php echo $DOMAIN; ?>login">Đăng nhập</a>
                        </li>
                        <li id="BodyContent_ctl00_ctl04_liRegister"
                            style="border-left: 1px solid; padding-left: 10px !important;"><a
                                href="<?php echo $DOMAIN; ?>login">Đăng
                                ký</a></li>
                    </ul>
                    <?php	 } 	 ?>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <div class="row">
                <a class="site-logo" href="<?php echo $DOMAIN; ?>"><img alt="" style="height: 55px;"
                        src="<?php echo $DOMAIN; ?>img/logo.png"></a>

                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
                <!-- <div class="top-cart-block">
                    <div class="top-cart-info">
                        <div class="header-navigation font-transform-inherit font-family-san menu-cinema">
                        </div>
                    </div>
                </div> -->
                <!-- BEGIN NAVIGATION -->
                <div class="header-navigation pull-right font-transform-inherit">
                    <ul>
                        <?php	 if(isset($categories['menu'])){ 
                            foreach($categories['menu'] as $v) {
                            ?>
                        <li id="BodyContent_ctl00_ctl04_rptMenu2_liNoChild_0">
                            <a href="<?php echo $DOMAIN . $v['slug']; ?>">
                                <?php	 echo $v['title']; 	 ?>
                            </a>
                        </li>
                        <?php	 } 	 ?>
                        <?php	 } 	 ?>
                        <!-- END TOP SEARCH -->
                    </ul>
                </div>
                <!-- END NAVIGATION -->
            </div>
        </div>
    </div>
    <!-- Header END -->
</div>