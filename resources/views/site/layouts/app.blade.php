
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/bootstrap.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/animate.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/fonts/flaticon.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/boxicons.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/assets/css/owl.theme.default1.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/magnific-popup.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/nice-select.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/meanmenu.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/responsive.css')}}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{asset('site/assets/css/theme-dark.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('site/assets/images/favicon.png')}}">

    <title>Techex - Technology & IT Services HTML Template</title>
</head>

<body>
    <!-- Pre Loader -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <!-- End Pre Loader -->

    <!-- Top Header Start -->
    @include('site/layouts/header')
    <!-- Top Header End -->

    <!-- Top Header Start -->
    @include('site/layouts/navbar')
    <!-- Top Header End -->

     <!-- Top Content Start -->
    @yield('content')
    <!-- Top Content End -->

    <!-- Footer Area End -->
    @include('site.layouts.footer')
    <!-- Footer Area End -->

    <!-- Color Switch Button -->
    <div class="switch-box">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Color Switch Button End -->

    <!-- Jquery Min JS -->
    <script src="{{asset('site/assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{asset('site/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{asset('site/assets/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{asset('site/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{asset('site/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Wow Min JS -->
    <script src="{{asset('site/assets/js/wow.min.js')}}"></script>
    <!-- Meanmenu JS -->
    <script src="{{asset('site/assets/js/meanmenu.js')}}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{asset('site/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{asset('site/assets/js/form-validator.min.js')}}"></script>
    <!-- Contact Form JS -->
    <script src="{{asset('site/assets/js/contact-form-script.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('site/assets/js/custom.js')}}"></script>

</body>

</html>
