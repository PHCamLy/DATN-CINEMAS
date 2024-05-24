<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    {{--Styles css common--}}
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('Assets/Common/Plugins/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Common/Plugins/Bootstrap/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Common/Plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/css/components9bf4.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet"
        href="{{ asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/global/plugins/slider-layer-slider/css/layerslider.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/frontend/pages/css/style-layer-slider.css') }}"> -->
    <!-- <link rel="stylesheet"
        href="{{ asset('Assets/Common/Plugins/DownloadPlugin/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.css"
        integrity="sha512-OWGg8FcHstyYFwtjfkiCoYHW2hG3PDWwdtczPAPUcETobBJOVCouKig8rqED0NMLcT9GtE4jw6IT1CSrwY87uw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('Assets/Common/css/stylebb80.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Common/css/cssbb80.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/pages/css/style-shopbb80.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/layout/css/themes/bluebb80.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/layout/css/custom4c33.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Specific/smart-app-banner/smart-app-banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('Assets/Common/Plugins/JQuery/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('Assets/Common/Plugins/Bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script
        src="{{ asset('Assets/Common/Plugins/DownloadPlugin/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.js"
        integrity="sha512-FbWDiO6LEOsPMMxeEvwrJPNzc0cinzzC0cB/+I2NFlfBPFlZJ3JHSYJBtdK7PhMn0VQlCY1qxflEG+rplMwGUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="{{ asset('Assets/Common/scripts/layout.js') }}"></script> -->
    <script>
        const csrfToken = '{{csrf_token()}}';
        const DOMAIN = '{{$DOMAIN}}';
    </script>
    @yield('style-libraries')

    {{--Styles custom--}}

    @yield('styles')

</head>

<body>
    @include('Web.element.header')

    @yield('content')

    @include('Web.element.footer')

    @yield('scripts')
</body>

</html>