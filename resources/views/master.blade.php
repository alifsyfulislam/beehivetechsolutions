<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('/')}}ui-asset/images/favicon.png" type="image/x-icon" sizes="48x48">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,700%7CLato:300,400,700">
    <link rel="stylesheet" href="{{asset('/')}}ui-asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('/')}}ui-asset/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}ui-asset/css/fonts.css">
    <link rel="stylesheet" href="{{asset('/')}}ui-asset/css/style.css">
</head>
<body>
<!-- Page Loader-->
<div id="page-loader">
    <div class="page-loader-body"><img src="{{asset('/')}}ui-asset/images/logo-default-200x65.png" alt="" width="200" height="65"/>
        <div class="cssload-wrapper">
            <div class="cssload-border">
                <div class="cssload-whitespace">
                    <div class="cssload-line"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page">
    {{--    menu--}}
    @include('ui.common.menu')
    <main>
        @yield('body')
    </main>
    {{--footer--}}
    @include('ui.common.footer')
</div>
{{--javascript--}}
<script src="{{asset('/')}}ui-asset/js/core.min.js"></script>
<script src="{{asset('/')}}ui-asset/bootstrap/js/bootstrap.js"></script>
<script src="{{asset('/')}}ui-asset/js/script.js"></script>
</body>
</html>

