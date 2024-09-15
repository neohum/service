<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ditan - Responsive HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png')}}">

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
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span>Phone - +880166 253 232,</span> <span>E-mail - info@domain.com</span></p>
                                </div>
                                <div class="text_wrap">
                                    <p><a href="#"> <i class="ti-user"></i> Login</a> <a href="#">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ Vite::asset('resources/img/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#">Home <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="index.html">Business</a></li>
                                                        <li><a href="index-2.html">Inspire</a></li>
                                                        <li><a href="index-3.html">Course Hub</a></li>
                                                        <li><a href="index-4.html">Creative</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-us.html">About</a></li>
                                                <li><a href="#">Service <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="service.html">Service</a></li>
                                                        <li><a href="service-details.html">Service Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="team.html">Team</a></li>
                                                        <li><a href="client.html">Clints</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="price-table.html">Price Table</a></li>
                                                        <li><a href="about-us.html">About</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">blog</a></li>
                                                        <li><a href="single-blog.html">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a data-scroll-nav='1' href="#">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="hero-area bg-img bg-overlay" style="background-image: url({{ Vite::asset('resources/img/banner/8.jpg')}});">
        <div class="container h-100">

            @yield('content')
        </div>
    </div>

    

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <ul>
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Center</a></li>
                                <li><a href="#">Become an Instructor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Campus
                            </h3>
                            <ul>
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Business Solutions</a></li>
                                <li><a href="#">Government Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Study
                            </h3>
                            <ul>
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                <li><a href="#">Visa Information</a></li>
                                <li><a href="#">Tuition Calculator</a></li>
                                <li><a href="#">Request Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
