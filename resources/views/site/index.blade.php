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


{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    <style>--}}
{{--        @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);--}}
{{--        /* Base */--}}
{{--        body {--}}
{{--            padding: 0;--}}
{{--            margin: 0;--}}
{{--            background-color: #fff;--}}
{{--            display: flex;--}}
{{--            align-items: center;--}}
{{--            justify-content: center;--}}
{{--            min-height: 100vh;--}}
{{--        }--}}
{{--        h1 {--}}
{{--            position: relative;--}}
{{--            color: #233863;--}}
{{--            font-weight: bold;--}}
{{--            font-family: "Anonymous Pro", monospace;--}}
{{--            letter-spacing: 7px;--}}
{{--            overflow: hidden;--}}
{{--            border-right: 2px solid hsl(0, 0%, 80%);--}}
{{--            white-space: nowrap;--}}
{{--            animation: typewriter 4s steps(85) 1s 1 normal both,--}}
{{--            blinkTextCursor 500ms infinite;--}}
{{--        }--}}

{{--        @keyframes typewriter {--}}
{{--            from {--}}
{{--                width: 0;--}}
{{--            }--}}
{{--            to {--}}
{{--                width: 90%;--}}
{{--            }--}}
{{--        }--}}
{{--        @keyframes blinkTextCursor {--}}
{{--            from {--}}
{{--                border-right-color: hsl(0, 0%, 100%);--}}
{{--            }--}}
{{--            to {--}}
{{--                border-right-color: transparent;--}}
{{--            }--}}
{{--        }--}}

{{--        /* Mobile Styles */--}}
{{--        @media (max-width: 414px) { /* Adjust this breakpoint for iPhone 12 */--}}
{{--            h1 {--}}
{{--                content: "Dave";--}}
{{--                font-size: 15px; /* Adjust the font size for smaller screens */--}}
{{--                letter-spacing: 3px; /* Adjust letter spacing for better readability */--}}
{{--                 /* Allow text to wrap on smaller screens */--}}
{{--            }--}}

{{--            img {--}}
{{--                max-width: 100%; /* Make the image responsive */--}}
{{--                height: auto;--}}
{{--            }--}}

{{--            h2 {--}}
{{--                font-size: 14px; /* Adjust the font size for smaller screens */--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body >--}}
{{--<div class="container" style="text-align: center; align-content: center; width: 100%; background-color: white">--}}
{{--    <h1 style="margin-left: 6%">Мы доставляем почтовые услуги в Узбекистан из России....</h1>--}}
{{--    <img style="width: 1000px; height: auto;" src="{{asset('site/assets/images/delivery1.jpg')}}">--}}
{{--    <h2 style=" color: #233863">+998(94)-476-52-41</h2>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('admin-assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dave - Cargo</title>
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
            font-family: "Anonymous Pro", monospace;
        }

        h1 {
            position: relative;
            color: #233863;
            font-weight: bold;
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

        /* Mobile Styles */
        @media (max-width: 414px) { /* Adjust this breakpoint for iPhone 12 */
            h1 {
                font-size: 17px; /* Adjust the font size for smaller screens */
                letter-spacing: 3px; /* Adjust letter spacing for better readability */
                overflow-wrap: break-word; /* Allow text to wrap on smaller screens */
                animation: none; /* Remove typewriter animation on mobile */
                border-right: none; /* Remove the typing cursor on mobile */
            }
            image{
                margin-top: 15px;
            }
            h2{
                margin-top: 15px;
            }
        }

        img {

            max-width: 100%; /* Make the image responsive */
            height: auto;
        }

        h2 {
            font-size: 18px; /* Adjust the font size for smaller screens */
            margin-top: -10px;
        }
    </style>
</head>
<body>
<div class="container" style="text-align: center; align-content: center; width: 100%; background-color: white">
    <h1 id="dynamicH1" style="margin-left: 6%">Доставка товаров и посылок <strong>Россия</strong> - <strong>Узбекистан</strong>...
    </h1>
    <img style="max-width: 80%; height: auto;" src="{{asset('site/assets/images/delivery1.jpg')}}">

    <div class="row" style="display: flex; justify-content: center; align-items: center;">
        <a href="https://t.me/davron_valiyevich" target="_blank"><i class="fa fa-telegram" style="font-size:24px; margin-right: 10px; color: #259CD8"></i></a>
        <a href="https://api.whatsapp.com/send?phone=998944765241" target="_blank"><i class="fa fa-whatsapp" style="font-size:24px; margin-right: 10px; color: green"></i></a>
        <h2 style="color: #233863; margin-top: 10px; margin-bottom: 0;"> +998(94)-476-52-41</h2>
    </div>



</div>
<script>
    // JavaScript to change h1 content on mobile
    if (window.innerWidth <= 414) { // Adjust this breakpoint for iPhone 12
        document.getElementById('dynamicH1').textContent = 'Почта из России в Узбекистан';
    }
</script>
</body>
</html>



{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="./style.css">--}}
{{--    <title>Post Office</title>--}}
{{--    <style>--}}
{{--        @import url('https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap');--}}
{{--        :root{--}}
{{--            --narmalniy-Font:'Inclusive Sans', sans-serif;--}}
{{--        }--}}
{{--        *{--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}
{{--        body {--}}
{{--            display: flex;--}}
{{--            height: 100%;--}}
{{--        }--}}
{{--        .container{--}}
{{--            position: relative;--}}
{{--            width: 100%;--}}
{{--            height:800px;--}}
{{--            background-image: url({{asset('site/assets/images/delivery1.jpg')}});--}}
{{--            background-repeat: no-repeat;--}}
{{--            background-attachment:scroll;--}}
{{--            background-position: center;--}}
{{--            background-size: cover;--}}
{{--        }--}}
{{--        .word {--}}
{{--            padding-top: 5%;--}}
{{--            padding-left: 5%;--}}
{{--            align-items: center;--}}
{{--            margin: auto;--}}
{{--            color: red;--}}
{{--            font: 700 normal 2.5em var(--narmalniy-Font);--}}
{{--            text-shadow: 2px 2px #222324, ;--}}
{{--        }--}}
{{--        @media screen and (max-width:1024px) {--}}
{{--            .container{--}}
{{--                position: fixed;--}}
{{--                background-image: url({{asset('site/assets/images/delivery1.jpg')}});--}}
{{--              --}}
{{--                background-repeat: no-repeat;--}}
{{--                background-attachment:scroll;--}}
{{--                background-position: center;--}}
{{--                background-size:contain;--}}
{{--            }--}}
{{--            .word{--}}
{{--                position: fixed;--}}
{{--                font: 400 normal 1.8em var(--narmalniy-Font);--}}
{{--                color: blue;--}}
{{--            }--}}
{{--        }--}}



{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <h3 class="word"></h3>--}}
{{--</div>--}}
{{--    <script>--}}
{{--        'use strict'--}}
{{--        window.addEventListener('DOMContentLoaded',()=>{--}}
{{--            var arr = [ 'М', 'ы ', ' д', 'о', 'с', 'т', 'а', 'в', 'л', 'я', 'е', 'м ', ' п', 'о', 'ч', 'т', 'о', 'в', 'ы ', ' у', 'с', 'л', 'у', 'г', 'и ', ' в ', ' У', 'з', 'б', 'е', 'к', 'и', 'с', 'т', 'а', 'н ', ' и ', ' Р', 'о', 'с', 'с', 'и', 'и ', ' . . . ' ];--}}
{{--            var word = document.querySelector( '.word' );--}}

{{--            function show( jumla ) {--}}
{{--                var i = 0;--}}
{{--                let interval =  setInterval( () => {--}}
{{--                    word.innerText += jumla[ i ];--}}
{{--                    i++;--}}
{{--                    if ( i == jumla.length ) {--}}
{{--                        clearInterval( interval );--}}
{{--                    }--}}
{{--                }, 100 );--}}
{{--            }--}}
{{--            show( arr );--}}
{{--        })--}}

{{--    </script>--}}
{{--</body>--}}
{{--</html>--}}






