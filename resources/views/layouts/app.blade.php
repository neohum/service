<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IT 기기 대여 서비스</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/animate.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{ Vite::asset('resources/css/responsive.css')}}"> -->
</head>

<body>


    <!-- slider_area_start -->
    <div class="hero-area bg-img bg-overlay" style="background-image: url({{ Vite::asset('resources/img/banner/8.jpg')}});">
        <div class="container h-100">

            @yield('content')
        </div>
    </div>

<!-- slider_area_start -->
<div class="hero-area bg-img bg-overlay" style="background-image: url({{ Vite::asset('resources/img/banner/8.jpg')}});">
    <div class="container h-100">


    </div>
</div>


    <!-- footer start -->
    <footer class="footer">


        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-12">
                        <p class="copy_right text-center">
                            All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i>
                            by <a href="#" target="_blank">Theme-zome</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->

    <!-- JS here -->
    <script src="{{ Vite::asset('resources/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/popper.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/bootstrap.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/owl.carousel.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/ajax-form.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/waypoints.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/scrollIt.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/wow.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/nice-select.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/plugins.js')}}"></script>
    <script src="{{ Vite::asset('resources/js/gijgo.min.js')}}"></script>

    <script src="{{ Vite::asset('resources/js/main.js')}}"></script>

</body>

</html>
