<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    {{--Styles css common--}}
    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/custom/jquery.datetimepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.css"
        integrity="sha512-OWGg8FcHstyYFwtjfkiCoYHW2hG3PDWwdtczPAPUcETobBJOVCouKig8rqED0NMLcT9GtE4jw6IT1CSrwY87uw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style-libraries')

    <link rel="stylesheet" href="{{ asset('admin/custom/cam.css') }}">

    <script>
        const csrfToken = '{{csrf_token()}}';
        const DOMAIN = '{{$DOMAIN}}';
    </script>
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <?php 
    if(isset($is_login) && $is_login == 1) {

    }else { ?>
        @include('Admin.element.header')
        <?php } ?>

        @yield('content')

    </div>
    <?php 
    if(isset($is_login) && $is_login == 1) {
    }else { ?>
    @include('Admin.element.footer')
    <?php } ?>

    <div class="loading-process d-none">
        <div class="process-bg p-5 rounded-3">
            <!-- <img src="img/loading.gif"> -->
            <div class="spinner-grow text-primary m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-success m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-info m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-warning m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-danger m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-dark m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <!-- <div class="process">
                <div class="pgr"></div>
            </div> -->
            <div class="process-lb">
                Hệ thống đang xử lý dữ liệu. Vui lòng chờ trong giây lát...
            </div>
        </div>
    </div>
    <input type="hidden" id="flash" value='<?php echo  Session::get('msg') !=null ? Session::get('msg'): '' ; ?>'>
    <input id="file" name="file" type="file" multiple accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"
        style="display: none;" />
    {{--Scripts js common--}}
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/admin-resources/rwd-table/rwd-table.min.js') }}"></script>
    <script src="{{ asset('admin/custom/jquery.datetimepicker.min.js') }}"></script>
    <script src="{{ asset('admin/custom/jquery.number.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.js"
        integrity="sha512-FbWDiO6LEOsPMMxeEvwrJPNzc0cinzzC0cB/+I2NFlfBPFlZJ3JHSYJBtdK7PhMn0VQlCY1qxflEG+rplMwGUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/custom/init.js') }}"></script>
    <script src="{{ asset('admin/custom/constant.js') }}"></script>
    <script src="{{ asset('admin/custom/function.js') }}"></script>

    @yield('scripts')

</body>

</html>