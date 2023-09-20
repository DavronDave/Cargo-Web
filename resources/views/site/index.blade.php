{{--@extends('site.layouts.app')--}}
{{--@section('content')--}}
{{--    <!-- Banner Area Two -->--}}
{{--    @include('site/sections/banner')--}}
{{--    <!-- Banner Area Two End -->--}}

{{--    <!-- About Area -->--}}
{{--    @include('site/sections/about')--}}
{{--    <!-- About Area End -->--}}

{{--    <!-- Security Area -->--}}
{{--    @include('site/sections/security')--}}
{{--    <!-- Security Area End -->--}}

{{--    <!-- Services Area Three -->--}}
{{--    @include('site/sections/services')--}}
{{--    <!-- Services Area Three End -->--}}

{{--    <!-- Build Area -->--}}
{{--    @include('site/sections/build')--}}
{{--    <!-- Build Area End -->--}}

{{--    <!-- Case Study Area -->--}}
{{--    @include('site/sections/case_study')--}}
{{--    <!-- Case Study Area End -->--}}

{{--    <!-- Talk Area -->--}}
{{--    @include('site/sections/talk')--}}
{{--    <!-- Talk Area End -->--}}

{{--    <!-- Technology Area Two -->--}}
{{--    @include('site/sections/technology')--}}
{{--    <!-- Technology Area Two End -->--}}

{{--    <!-- Brand Area -->--}}
{{--    @include('site/sections/brand')--}}
{{--    <!-- Brand Area End -->--}}

{{--    <!-- Clients Area -->--}}
{{--    @include('site/sections/clients')--}}
{{--    <!-- Clients Area End -->--}}

{{--    <!-- Blog Area -->--}}
{{--    @include('site/sections/blog')--}}
{{--    <!-- Blog Area End -->--}}
{{--@endsection--}}

!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);
        /* Base */
        body {
            padding: 0;
            margin: 0;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        h1 {
            position: relative;
            color: #233863;
            font-weight: bold;
            font-family: "Anonymous Pro", monospace;
            letter-spacing: 7px;
            overflow: hidden;
            border-right: 2px solid hsl(0, 0%, 80%);
            white-space: nowrap;
            animation: typewriter 4s steps(85) 1s 1 normal both,
            blinkTextCursor 500ms infinite;
        }

        @keyframes typewriter {
            from {
                width: 0;
            }
            to {
                width: 90%;
            }
        }
        @keyframes blinkTextCursor {
            from {
                border-right-color: hsl(0, 0%, 100%);
            }
            to {
                border-right-color: transparent;
            }
        }
    </style>
</head>
<body >
<div class="container" style="text-align: center; align-content: center; width: 100%; background-color: white">
    <h1 style="margin-left: 6%">Мы доставляем почтовые услуги в Узбекистан из России....</h1>
    <img style="width: 1000px; height: auto;" src="{{asset('site/assets/images/delivery1.jpg')}}">
    <h2 style=" color: #233863">+998(94)-476-52-41</h2>
</div>
</body>
</html>

