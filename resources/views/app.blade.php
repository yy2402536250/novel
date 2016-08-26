<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>书虫网-无弹窗网络小说最新章节阅读网</title>
    <meta name="keywords" content="书虫网,无弹窗,网络小说,热门小说,最新章节,shu000" />
    <meta name="description" content="书虫网为广大网络书虫们免费提供了当前最火热的网络小说，拥有最佳的阅读体验，是广大网络小说爱好者们必不可少小说阅读网。" />
    <link rel="shortcut icon" href="/favicon.ico">
    {{--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">--}}
    {{--<script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>--}}
    <script src="/dist/js/ipos.core.js" type="text/javascript"></script>
    <script src="/dist/js/ipos.comic.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/dist/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/dist/css/main.css" />
    <script type="text/javascript" src="/dist/js/santruyen.js"></script>
    <script type="text/javascript" src="/dist/js/tabs.js"></script>
</head>
<body>
    <div class="wrapper">
        @include('common.header')
        @include('common.navbar')
        <!-- main -->
        <div id="main">
            @yield('content')
        </div>
        <!-- /main -->
        @include('common.footer')
    </div>
</body>
</html>