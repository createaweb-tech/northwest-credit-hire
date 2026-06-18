<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8">
    <title>Northwest Credit Hire</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="author" content="Create A Web">
    <!-- Website developed by Akif Ullah - https://www.akifullah.com | with agency Create A Web -->
    <meta name="keywords"
        content="credit hire, accident management, replacement vehicle, taxi replacement, non-fault accident, Greater Manchester">
    <meta name="description"
        content="Northwest Credit Hire provides same-day like-for-like replacement vehicles and full accident management for non-fault drivers across the North West. No upfront cost. Available 24/7.">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset("assets/images/favicon.png")}}">
    <!-- Site All Style Sheet Css -->
    <link href="{{asset("assets/stylesheets/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/stylesheets/swiper.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/stylesheets/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/stylesheets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/stylesheets/owl.theme.default.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/stylesheets/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/stylesheets/magnific-popup.css")}}" rel="stylesheet">
    <!-- Site Main Style Sheet Css -->
    <link href="{{asset("assets/stylesheets/style.css")}}" rel="stylesheet">
    <!-- Northwest Credit Hire custom styles -->
    <link href="{{asset("assets/stylesheets/nch-custom.css")}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">

    @yield("style")

</head>

<body>

    <!-- Start Page Preloader Area -->
    <div class="preloader" id="kar-theme-preloader">
        <div class="preloader-wapper">
            <div>
                <div class="spinner-loader">
                    <img src="{{asset("assets/images/loader.svg")}}" alt="loader">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader Area -->

    <!-- Start Header Navbar Area -->
    <header id="zr-theme-menu" class="zr-theme-menu-header-navber-area">
        <div class="nav-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <ul class="top-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="call-to-action">
                            <p><i class="fa fa-map"></i> Greater Manchester, UK</p>
                            <p><i class="fa fa-phone"></i> 24/7: 0800 000 0000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll" href="{{route("home")}}">
                    <img class="white-logo nch-logo-img" src="{{asset("assets/images/logo-dark.png")}}"
                        alt="Northwest Credit Hire">
                    <img class="black-logo nch-logo-img" src="{{asset("assets/images/logo-light.png")}}"
                        alt="Northwest Credit Hire">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                    aria-label="Toggle navigation"> <span></span> <span></span> <span></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link js-scroll {{ Route::is('home') ? 'active' : '' }}"
                                href="{{route("home")}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ Route::is('services') ? 'active' : '' }}"
                                href="{{route("services")}}">Services</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ Route::is('about') ? 'active' : '' }}"
                                href="{{route("about")}}">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ Route::is('faqs') ? 'active' : '' }}"
                                href="{{route("faqs")}}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll {{ Route::is('contact') ? 'active' : '' }}"
                                href="{{route("contact")}}">Contact</a></li>
                        <li class="nav-item book-now"><a class="nav-link js-scroll" href="tel:08000000000"><i
                                    class="fa fa-phone"></i> Call 24/7</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Navbar Area -->

    @yield("content")

    <!-- Footer -->
    <footer id="footer" class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{route("home")}}" class="logo d-flex align-items-center">
                                    <img class="nch-logo-img" src="assets/images/logo-dark.png"
                                        alt="Northwest Credit Hire">
                                </a>
                            </div>
                            <div class="footer-text">
                                <p>Credit hire and accident management specialists. We take complete ownership of your
                                    non-fault claim &mdash; all under one roof, at no cost to you.</p>
                            </div>
                            <div class="footer-social-icon">
                                <a href="#"><i class="fa fa-facebook facebook-bg"></i></a>
                                <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fa fa-instagram google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Quick Links</h3>
                            </div>
                            <ul>
                                <li><a href="{{route("home")}}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>Home</a></li>
                                <li><a href="{{route("services")}}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>Our Services</a></li>
                                <li><a href="{{route("about")}}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>About Us</a></li>
                                <li><a href="{{route("faqs")}}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>FAQ</a></li>
                                <li><a href="{{route("contact")}}"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Contact:</h3>
                            </div>
                            <div class="contact-info">
                                <h6>Address:</h6>
                                <p><i class="fa fa-map"></i> Greater Manchester, United Kingdom</p>
                            </div>
                            <div class="contact-info">
                                <h6>Phone (24/7):</h6>
                                <p><i class="fa fa-phone"></i> 0800 000 0000</p>
                            </div>
                            <div class="contact-info">
                                <h6>Email:</h6>
                                <p><i class="fa fa-envelope"></i> info@northwestcredithire.co.uk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-left text-lg-left">
                        <div class="copyright-text">
                            <p>Northwest Credit Hire &copy; {{date("Y")}}. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                        <div class="footer-menu text-right">
                            <p class="text-muted">Made with <i class="fa fa-heart text-danger"></i> by <a
                                    class="font-bold"
                                    href="https://www.createaweb.co.uk?utm_source=NorthwestCreditHire&utm_medium=website&utm_campaign=footer"
                                    target="_blank">Create A Web</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Start -->
    <div class="back-to-top">
        <i class="fa fa-caret-up"></i><i class="fa fa-caret-up"></i>
    </div>
    <!-- Back to Top End -->

    <!-- Site All Jquery Js -->
    <script src="{{asset("assets/javascript/jquery-3.5.1.min.js")}}"></script>
    <script src="{{asset("assets/javascript/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/javascript/plugins.js")}}"></script>
    <script src="{{asset("assets/javascript/swiper.min.js")}}"></script>
    <script src="{{asset("assets/javascript/wow.min.js")}}"></script>
    <script src="{{asset("assets/javascript/validator.min.js")}}"></script>
    <script src="{{asset("assets/javascript/contact.js")}}"></script>
    <script src="{{asset("assets/javascript/main.js")}}"></script>

    @yield("script")
</body>

</html>