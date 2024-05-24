@extends('Web.layouts.layout')

@section('title', 'CAM - cinemas')

@section('content')
<?php	 
dd($data);
?>
<div class="container">
    <div class="row">
        <div id="BodyContent_ctl00_leftPanel" class="ecm-panel col-lg-8">

            <style>
                table {
                    border-bottom-width: 1px;
                }

                img {
                    /*display: block;*/
                    max-width: 100%;
                    /*height: auto !important;
width: auto !important;*/
                }
            </style>

            <a href="#popup_getvouchercode" class="fancybox-getvouchercode"></a>
            <div id="popup_getvouchercode" style="display: none;width: 500px; margin-top: -200px;">
                <div class="modal-body text-center">
                    <div class="row">
                        <label id="lblFirstMessage" class="col-md-16"
                            style="font-family: Oswald;font-size: 20px;font-weight: 600;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: normal;text-align: center;color: #03599d;"></label>
                        <label id="lblSecondMessage" class="col-md-16"
                            style="font-family: SourceSansPro;font-size: 18px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: normal;text-align: center;color: #1e1f28;padding-bottom: 30px;"></label>
                    </div>
                    <div class="row">
                        <div class="col-md-16 col-sm-16 col-xs-16 text-center">
                            <input type="hidden" id="hdPopupStatus" name="hdPopupStatus" value="">
                            <button type="button" onclick="closeFancyPopup()" class="btn btn-2 btn-mua-ve"><span
                                    id="spnPopupButton"></span></button>
                        </div>
                    </div>
                </div>
            </div>


            <link href="/Assets/Common/Plugins/LightboxImage/swipebox/css/swipebox.css" rel="stylesheet"
                type="text/css">
            <script type="text/javascript">

                function PrintElem(elem) {

                    document.getElementById('btnPrintContent').style.visibility = 'hidden';
                    document.getElementById('btnIncreaseFontSize').style.visibility = 'hidden';
                    document.getElementById('btnDecreaseFontSize').style.visibility = 'hidden';

                    Popup($(elem).html());

                    document.getElementById('btnPrintContent').style.visibility = '';
                    document.getElementById('btnIncreaseFontSize').style.visibility = '';
                    document.getElementById('btnDecreaseFontSize').style.visibility = '';
                }

                function Popup(data) {
                    var currentLocation = window.location;
                    var mywindow = window.open('', 'my div', 'height=600,width=800');
                    mywindow.document.write('<html><head><title>In bài viết</title>');
                    mywindow.document.write('</head><body>');
                    mywindow.document.write('<p style="color: #004175;font-weight: bold;font-style: italic;">Link nội dung: <a style="color: #004175;text-decoration: none;" href="' + currentLocation + '">' + currentLocation + '</a></p></body></html>');
                    mywindow.document.write(data);
                    mywindow.document.close(); // necessary for IE >= 10
                    mywindow.focus(); // necessary for IE >= 10

                    mywindow.print();
                    mywindow.close();

                    return true;
                }

                function getVoucherCode() {
                    var jsonData = JSON.stringify({ aData: '' });
                    $.ajax({
                        type: "POST",
                        url: "/Ajax.aspx/GetVoucherCode",
                        data: jsonData,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        success: function (data) {
                            if (data.d === "") {
                                document.getElementById('lblFirstMessage').innerHTML = 'Có lỗi khi xử lý';
                                document.getElementById('lblSecondMessage').innerHTML = '';
                                document.getElementById('hdPopupStatus').value = -1;
                                document.getElementById('spnPopupButton').textContent = 'Đóng';
                                jQuery('.fancybox-getvouchercode').fancybox({ afterLoad: function () { } }).trigger('click');
                            } else {
                                var obj = JSON.parse(data.d);
                                document.getElementById('lblFirstMessage').innerHTML = obj.FirstMessage;
                                document.getElementById('lblSecondMessage').innerHTML = obj.SecondMessage;
                                document.getElementById('hdPopupStatus').value = obj.Status;
                                if (obj.Status == -1) {
                                    document.getElementById('spnPopupButton').textContent = 'Đóng';
                                }
                                if (obj.Status == 0) {
                                    document.getElementById('spnPopupButton').textContent = 'Danh sách voucher public';
                                }
                                if (obj.Status == 1) {
                                    document.getElementById('spnPopupButton').textContent = 'Danh sách voucher của bạn';
                                }
                                if (obj.Status == 2) {
                                    document.getElementById('spnPopupButton').textContent = 'Danh sách voucher public';
                                }
                                jQuery('.fancybox-getvouchercode').fancybox({ afterLoad: function () { } }).trigger('click');
                            }
                        },
                        error: function () {
                            alert("Error loading data! Please try again.");
                        }
                    })
                        .done(function (msg) {
                        });
                }
                function closeFancyPopup() {
                    if (document.getElementById('hdPopupStatus').value == -1) {
                        $.fancybox.close();
                    }
                    if (document.getElementById('hdPopupStatus').value == 0) {
                        window.location.href = '/voucher-public.htm';
                    }
                    if (document.getElementById('hdPopupStatus').value == 1) {
                        window.location.href = '/thong-tin-tai-khoan.htm#voucher';
                    }
                    if (document.getElementById('hdPopupStatus').value == 2) {
                        window.location.href = '/voucher-public.htm';
                    }
                }
            </script>

            <div id="BodyContent_ctl00_ctl04_storylineDetails">

            </div>
            <!--//========================== NEWS INFO ================================//-->
            <div class="news-info margin-top-20 margin-sm-top-20 margin-xs-top-20">
                <div id="printContent">
                    <div class="col-md-16 col-sm-16 col-xs-16">
                        <div id="BodyContent_ctl00_ctl04_showImage" class="text-center"
                            style="margin-bottom: 10px; text-align: center; display: none;">
                            <a href="https://files.betacorp.vn/media/images/2024/05/17/uu-dai-boc-co-rockstar-545x415-090350-170524-21.png"
                                title="" class="swipebox">
                                <img src="https://files.betacorp.vn/media/images/2024/05/17/uu-dai-boc-co-rockstar-545x415-090350-170524-21.png"
                                    class="img-responsive" style="display: initial;"></a>
                            <p style="font-style: italic"></p>
                        </div>
                        <br>
                        <h2 class="no-margin">
                            ƯU ĐÃI BỐC- CÓ ROCKSTAR
                        </h2>
                        <div class="fb-like hidden-xs fb_iframe_widget"
                            data-href="https://betacinemas.vn/khuyen-mai-moi/uu-dai-boc-co-rockstar.htm"
                            data-layout="standard" data-action="like" data-size="small" data-show-faces="true"
                            data-share="true" fb-xfbml-state="rendered"
                            fb-iframe-plugin-query="action=like&amp;app_id=367174740769877&amp;container_width=515&amp;href=https%3A%2F%2Fbetacinemas.vn%2Fkhuyen-mai-moi%2Fuu-dai-boc-co-rockstar.htm&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small">
                            <span style="vertical-align: bottom; width: 450px; height: 28px;"><iframe
                                    name="f61065c18a319f20b" width="1000px" height="1000px"
                                    data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin"
                                    frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v17.0/plugins/like.php?action=like&amp;app_id=367174740769877&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfffbb2b9ab42c3e68%26domain%3Dbetacinemas.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fbetacinemas.vn%252Ff83dfdffaf5fb1bce%26relation%3Dparent.parent&amp;container_width=515&amp;href=https%3A%2F%2Fbetacinemas.vn%2Fkhuyen-mai-moi%2Fuu-dai-boc-co-rockstar.htm&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"
                                    style="border: none; visibility: visible; width: 450px; height: 28px;"
                                    class=""></iframe></span>
                        </div>
                        <h4>
                            <span id="BodyContent_ctl00_ctl04_newsContent"></span>
                        </h4>
                    </div>
                    <div class="col-md-16 col-sm-16 col-xs-16 font-family-san font-16" id="divNewsDetails">
                        <p><img alt=""
                                src="https://files.betacorp.vn/media/images/2024/05/17/uu-dai-boc-co-rockstar-545x415-090350-170524-21.png"
                                style="width: 100%; height: 100%;"></p>

                        <p>&nbsp;</p>

                        <p dir="ltr"><b id="docs-internal-guid-8186b686-7fff-22d0-dcf9-6e683e5e0386">Từ ngày 17/05 -
                                23/05/2024,&nbsp;khách hàng đến xem phim tại các cụm rạp Beta Cinemas&nbsp;khi mua Combo
                                bất kì của Beta&nbsp;sẽ được tặng kèm 1 lon Rockstar miễn phí.</b></p>

                        <p dir="ltr"><b>*Áp dụng toàn hệ thống trừ Hồ Tràm, Phú Mỹ, Phú Quốc và Trần Quang Khải</b></p>

                        <p dir="ltr">&nbsp;</p>

                        <h2 dir="ltr"><b id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Điều khoản và điều
                                kiện áp dụng:</b></h2>

                        <ul>
                            <li aria-level="1" dir="ltr">
                                <p dir="ltr" role="presentation"><b
                                        id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Áp dụng cho tất cả
                                        các Combo bất kì.</b></p>
                            </li>
                            <li aria-level="1" dir="ltr">
                                <p dir="ltr" role="presentation"><b
                                        id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Áp dụng cho Khách
                                        hàng là Thành viên của Beta Cinemas và có mua Combo bất kì.</b></p>
                            </li>
                            <li aria-level="1" dir="ltr">
                                <p dir="ltr" role="presentation"><b
                                        id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Áp dụng cả với
                                        khách hàng mua vé trực tiếp tại quầy và khách hàng đã mua vé online đến quầy lấy
                                        vé.</b></p>
                            </li>
                            <li aria-level="1" dir="ltr">
                                <p dir="ltr" role="presentation"><b
                                        id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Áp dụng cho suất
                                        chiếu sớm, suất chiếu đặc biệt.</b></p>
                            </li>
                            <li aria-level="1" dir="ltr">
                                <p dir="ltr" role="presentation"><b
                                        id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Không áp dụng đồng
                                        thời cùng các chương trình khuyến mãi khác của quầy Concession (như Mad Sale
                                        Day,...).</b></p>
                            </li>
                            <li aria-level="1" dir="ltr">
                                <p dir="ltr" role="presentation">
                                    <b id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">Không áp dụng cho
                                        các Group Sale hoặc Private Show có áp dụng chính sách ưu đãi giá vé.</b>
                                </p>
                            </li>
                        </ul>
                        <p dir="ltr"><em><b id="docs-internal-guid-88bf85f1-7fff-2da1-fbe9-e3e7a7fa79ba">*Lưu ý: Mỗi 01
                                    Combo sẽ chỉ được tặng 01 lon Rockstar.</b></em></p>
                        <div class="clearfix margin-bottom-10" style="margin-bottom: 10px;"></div>
                    </div>
                </div>
                <!--Tin bài liên quan-->
                <div style="display: normal">
                    <div class="col-lg-16">
                        <h1 class="text-uppercase margin-bottom-30"><a style="color: #000;">Tin tức khác</a></h1>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/don-cap-meo-u-uu-dai-da-nu.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/23/545x415-2-133356-230524-75.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.3197px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="ĐÓN CẶP MÈO Ú - ƯU ĐÃI ĐÃ NƯ"
                                    href="/khuyen-mai-moi/don-cap-meo-u-uu-dai-da-nu.htm">ĐÓN CẶP MÈO Ú - ƯU ĐÃI ĐÃ
                                    NƯ</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/combo-hoc-sinh-uu-dai-cuc-dinh.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/21/combo-hoc-sinh-sinh-vien-545-x-415-2-142413-210524-60.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.436px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="COMBO HỌC SINH - ƯU ĐÃI CỰC ĐỈNH"
                                    href="/khuyen-mai-moi/combo-hoc-sinh-uu-dai-cuc-dinh.htm">COMBO HỌC SINH - ƯU ĐÃI
                                    CỰC ĐỈNH</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/17/luong-kho-mini-minh-cung-nham-nhi-545-x-415-092337-170524-79.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.436px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="LƯƠNG KHÔ MINI - MÌNH CÙNG NHÂM NHI"
                                    href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">LƯƠNG KHÔ MINI - MÌNH
                                    CÙNG NHÂM NHI</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/05/13/combo-groupsale-545-x-415-2-174750-130524-54.png"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.436px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="XEM CÀNG ĐÔNG - GIÁ CÀNG SỐC"
                                    href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">XEM CÀNG ĐÔNG - GIÁ CÀNG
                                    SỐC</a>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/04/22/545x415-1-133943-220424-28.jpg"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.4157px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="Quét QR nhận quà 20K và X3 Xu MoMo Rewards!"
                                    href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">Quét QR nhận
                                    quà 20K và X3 Xu MoMo Rewards!</a>
                            </h4>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//media/images/2024/04/16/339090620-769688404468201-6997705945754521027-n-113050-160424-59.jpg"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.4157px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="BETA VÉ RẺ, MOMO MUA LIỀN!"
                                    href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">BETA VÉ RẺ, MOMO MUA LIỀN!</a>
                            </h4>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-16">
                            <a href="/khuyen-mai-moi/thanh-vien-beta-dong-gia-45k.htm">
                                <div class="mix-inner"
                                    style="height: 107.5px; border-radius: 10px !important; position: relative; overflow: hidden;">
                                    <img src="https://files.betacorp.vn//cms/images/2024/04/03/545x415-member-130929-030424-88.jpg"
                                        class="scale"
                                        style="position: absolute; top: 0px; left: -21.4157px; width: 142px; height: 108px; max-width: none;">
                                </div>
                            </a>
                            <h4 class="padding-top-10 padding-bottom-10 text-center"
                                style="height: 100px; overflow: hidden;">
                                <a style="color: #000000" title="THÀNH VIÊN BETA - ĐỒNG GIÁ 45K/50K"
                                    href="/khuyen-mai-moi/thanh-vien-beta-dong-gia-45k.htm">THÀNH VIÊN BETA - ĐỒNG GIÁ
                                    45K/50K</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xs-16 hidden-xs hidden-sm hidden-md hidden-lg margin-bottom-20" style="display: normal">
                    <div class="">
                        <ul class="nav nav-pills">
                            <li class="active font-transform-uppercase">
                                <a>Tin tức khác</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="ĐÓN CẶP MÈO Ú - ƯU ĐÃI ĐÃ NƯ"
                                href="/khuyen-mai-moi/don-cap-meo-u-uu-dai-da-nu.htm">ĐÓN CẶP MÈO Ú - ƯU ĐÃI ĐÃ NƯ
                            </a>
                        </div>

                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="COMBO HỌC SINH - ƯU ĐÃI CỰC ĐỈNH"
                                href="/khuyen-mai-moi/combo-hoc-sinh-uu-dai-cuc-dinh.htm">COMBO HỌC SINH - ƯU ĐÃI CỰC
                                ĐỈNH
                            </a>
                        </div>

                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="LƯƠNG KHÔ MINI - MÌNH CÙNG NHÂM NHI"
                                href="/khuyen-mai-moi/luong-kho-mini-minh-cung-nh-m-nhi.htm">LƯƠNG KHÔ MINI - MÌNH CÙNG
                                NHÂM NHI
                            </a>
                        </div>

                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="XEM CÀNG ĐÔNG - GIÁ CÀNG SỐC"
                                href="/khuyen-mai-moi/xem-cang-dong-gia-cang-soc.htm">XEM CÀNG ĐÔNG - GIÁ CÀNG SỐC
                            </a>
                        </div>

                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="Quét QR nhận quà 20K và X3 Xu MoMo Rewards!"
                                href="/khuyen-mai-moi/quet-qr-nhan-qua-20k-va-x3-xu-momo-rewards.htm">Quét QR nhận quà
                                20K và X3 Xu MoMo Rewards!
                            </a>
                        </div>

                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="BETA VÉ RẺ, MOMO MUA LIỀN!"
                                href="/khuyen-mai-moi/beta-ve-re-momo-mua-lien.htm">BETA VÉ RẺ, MOMO MUA LIỀN!
                            </a>
                        </div>

                        <div class="item">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a class="color1 font-15" title="THÀNH VIÊN BETA - ĐỒNG GIÁ 45K/50K"
                                href="/khuyen-mai-moi/thanh-vien-beta-dong-gia-45k.htm">THÀNH VIÊN BETA - ĐỒNG GIÁ
                                45K/50K
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="BodyContent_ctl00_rightPanel" class="ecm-panel col-lg-8">
            <div class="margin-top-40 margin-xs-top-0 pull-left">
                <h1 class="text-uppercase text-center bold margin-bottom-20">Phim đang hot</h1>
                <div
                    class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-bottom-15 padding-right-0 padding-md-right-15 padding-sm-right-15 padding-xs-right-15">
                    <div class="product-item no-padding">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" alt=""
                                src="https://files.betacorp.vn/media%2fimages%2f2024%2f05%2f20%2f310524%2Ddraft%2Dgarfield%2D151309%2D200524%2D67.jpg">
                            <span style="position: absolute; top: 10px; left: 10px;">
                                <img src="/Assets/Common/icons/films/p.png" class="img-responsive">
                            </span>
                            <div class="border-radius-20">
                                <a href="#product-pop-up"
                                    onclick="viewTrailer('Garfield: Mèo Béo Siêu Quậy', 'https://www.youtube.com/watch?v=dflMLESGX54');"
                                    class="fancybox-fast-view"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="height: 70px;">
                        <h4 class="text-center bold margin-top-5 font-xs-large" style="max-height: 70px;"><a
                                href="/chi-tiet-phim.htm?gf=59327135-d2ae-4b0c-a5f2-7b7f79bf2c86">Garfield: Mèo Béo Siêu
                                Quậy</a>
                        </h4>
                    </div>
                </div>
                <div
                    class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-bottom-15 padding-right-0 padding-md-right-15 padding-sm-right-15 padding-xs-right-15">
                    <div class="product-item no-padding">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" alt=""
                                src="https://files.betacorp.vn/media%2fimages%2f2024%2f05%2f20%2f310524%2Dsneak%2Dngoi%2Dden%2Dky%2Dquai%2D4%2D154700%2D200524%2D31.jpg">
                            <span style="position: absolute; top: 10px; left: 10px;">
                                <img src="/Assets/Common/icons/films/c-16.png" class="img-responsive">
                            </span>
                            <div class="border-radius-20">
                                <a href="#product-pop-up"
                                    onclick="viewTrailer('Ngôi Đền Kỳ Quái 4', 'https://www.youtube.com/watch?v=JToYSVWY4N8');"
                                    class="fancybox-fast-view"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="height: 70px;">
                        <h4 class="text-center bold margin-top-5 font-xs-large" style="max-height: 70px;"><a
                                href="/chi-tiet-phim.htm?gf=9a2ca700-a546-47f3-ab4c-d7a348a7269b">Ngôi Đền Kỳ Quái 4</a>
                        </h4>
                    </div>
                </div>
                <div
                    class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-bottom-15 padding-right-0 padding-md-right-15 padding-sm-right-15 padding-xs-right-15">
                    <div class="product-item no-padding">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" alt=""
                                src="https://files.betacorp.vn/media%2fimages%2f2024%2f04%2f24%2f240524%2Ddraft%2Ddoraemon%2D170958%2D240424%2D90.png">
                            <span style="position: absolute; top: 10px; left: 10px;">
                                <img src="/Assets/Common/icons/films/p.png" class="img-responsive">
                            </span>
                            <div class="border-radius-20">
                                <a href="#product-pop-up"
                                    onclick="viewTrailer('Doraemon: Nobita và Bản Giao Hưởng Địa Cầu', 'https://www.youtube.com/watch?v=Yug8gbDd5EQ');"
                                    class="fancybox-fast-view"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="height: 70px;">
                        <h4 class="text-center bold margin-top-5 font-xs-large" style="max-height: 70px;"><a
                                href="/chi-tiet-phim.htm?gf=66e4bf4a-762b-4026-8e09-5de16190d79a">Doraemon: Nobita và
                                Bản Giao Hưởng Địa Cầu</a>

                        </h4>
                    </div>
                </div>

                <div
                    class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-bottom-15 padding-right-0 padding-md-right-15 padding-sm-right-15 padding-xs-right-15">
                    <div class="product-item no-padding">
                        <div class="pi-img-wrapper">
                            <img class="img-responsive border-radius-20" alt=""
                                src="https://files.betacorp.vn/media%2fimages%2f2024%2f05%2f24%2f400x633%2D6%2D103906%2D240524%2D41.jpg">
                            <span style="position: absolute; top: 10px; left: 10px;">
                                <img src="/Assets/Common/icons/films/c-18.png" class="img-responsive">
                            </span>
                            <div class="border-radius-20">
                                <a href="#product-pop-up"
                                    onclick="viewTrailer('Furiosa: Câu Chuyện Từ Max Điên', 'https://www.youtube.com/watch?v=vPwSfR_O9Jo');"
                                    class="fancybox-fast-view"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="height: 70px;">
                        <h4 class="text-center bold margin-top-5 font-xs-large" style="max-height: 70px;"><a
                                href="/chi-tiet-phim.htm?gf=a34927da-bdda-4fa3-970e-d6d9d26a830b">Furiosa: Câu Chuyện Từ
                                Max Điên</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop