<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>OK COMPUTER</title>
        <link rel="icon" type="image/ico" href="{{asset('images/logo.ico')}}">
        <link type="text/css" href="{{ asset('assets_web/css/socicon.css') }}" rel="stylesheet" media="all"/>
        <link type="text/css" href="{{ asset('assets_web/css/iconsmind.css') }}" rel="stylesheet" media="all"/>
        <link type="text/css" href="{{ asset('assets_web/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/animate.min.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/font-awesome.min.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/pe-icon-7-stroke.min.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/simple-line-icons.min.css') }}" media="all" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/owl.carousel.min.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/revslider.css') }}"rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/jquery.bxslider.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/owl.theme.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/jquery.mobile-menu.css') }}" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/theme.css') }}" media="all" rel="stylesheet"/>
        <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="<?= $temp_page; ?>">
        <div id="page">
            @include("themes/web/header")
            <div class="main-container">
                @yield("content")
                @include("themes/web/footer")
            </div>
        </div>

        <div id="mobile-menu" class="pixxett-header1" style="left: -250px; width: 250px; height: 12549px; display: none; overflow: hidden;">
            @include('themes/web/mobile')
        </div>

        <a class="back-to-top active" id="toTop" href="javascript:void(0);" data-scroll-class="100vh:active" style="">
            <span id="toTopHover" style="opacity: 0;"></span><i class="icon-Up-4"></i>
        </a>

        <script src="{{ asset('assets_web/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/parallax.js') }}"></script>
        <script src="{{ asset('assets_web/js/typed.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/datepicker.js') }}"></script>
        <script src="{{ asset('assets_web/js/isotope.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/ytplayer.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/countdown.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/scripts.js') }}"></script>
        <script src="{{ asset('assets_web/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets_web/js/common.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets_web/js/jquery.mobile-menu.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets_web/js/owl.carousel.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets_web/js/revslider.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets_web/js/jquery.bxslider.min.js') }}" type="text/javascript"></script>
        <script>
            var csrf_token = '{{ csrf_token() }}';
        </script>
        @yield("scripts")
    </body>
</html>