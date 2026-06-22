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
    <link href="{{asset("assets/stylesheets/font-awesome.min.css")}}" rel="stylesheet">
    <!-- Site Main Style Sheet Css -->
    <link href="{{asset("assets/stylesheets/style.css")}}" rel="stylesheet">
    <!-- Northwest Credit Hire custom styles -->
    <link href="{{asset("assets/stylesheets/nch-custom.css")}}?v=5.31" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    @yield("style")

</head>

<body>

    <!-- Start Page Preloader Area -->
    {{-- <div class="preloader" id="kar-theme-preloader">
        <div class="preloader-wapper">
            <div>
                <div class="spinner-loader">
                    <img src="{{asset(" assets/images/loader.svg")}}" alt="loader">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Page Preloader Area -->

    <!-- Start Floating Navbar -->
    <header class="nch-header" id="nch-header">
        <div class="container">
            <nav class="nch-nav">
                <a class="nch-brand" href="{{route("home")}}">
                    <img src="{{asset("assets/images/logo-light.png")}}" alt="Northwest Credit Hire">
                </a>
                <div class="nch-nav-links" id="nch-menu">
                    <a class="text-uppercase {{ Route::is('home') ? 'active' : '' }}" href="{{route("home")}}">Home</a>
                    <a class="text-uppercase {{ Route::is('about') ? 'active' : '' }}" href="{{route("about")}}">About</a>
                    <a class="text-uppercase {{ Route::is('services') ? 'active' : '' }}" href="{{route("services")}}">Services</a>
                    {{-- <a class="text-uppercase {{ Route::is('faqs') ? 'active' : '' }}" href="{{route(" faqs")}}">FAQ</a> --}}
                    <a class="text-uppercase {{ Route::is('contact') ? 'active' : '' }}" href="{{route("contact")}}">Contact</a>
                </div>
                <div class="nch-nav-right">
                    <a class="nch-nav-phone" href="tel:07824973768"><i class="fa fa-phone"></i> 07824 973768</a>
                    <a class="btn btn-red btn-sm" href="{{route("contact")}}">Start a claim</a>
                    <button class="nch-burger" id="nch-burger" type="button" aria-label="Toggle menu">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Floating Navbar -->

    @yield("content")

    <!-- Footer -->
    <footer id="footer" class="footer-section">
        <div class="container">
            <div class="nch-foot-top">
                <div class="nch-foot-brand">
                    <a href="{{route("home")}}"><img src="{{asset("assets/images/logo-dark.png")}}"
                            alt="Northwest Credit Hire"></a>
                    <p>Credit hire and accident management specialists. We take complete ownership of your non-fault
                        claim  all under one roof, at no cost to you.</p>
                    <div class="nch-foot-social">
                        <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="nch-foot-col">
                    <h4>Navigate</h4>
                    <ul>
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><a href="{{route("about")}}">About Us</a></li>
                        <li><a href="{{route("services")}}">Our Services</a></li>
                        <li><a href="{{route("faqs")}}">FAQ</a></li>
                        <li><a href="{{route("contact")}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="nch-foot-col">
                    <h4>Get In Touch</h4>
                    <ul class="nch-foot-contact">
                        <li><i class="fa fa-map-marker"></i> <span>Unit A2, Highfield Industrial Estate, W End St, Oldham OL9 6AJ, United Kingdom</span></li>
                        <li><i class="fa fa-phone"></i> <a href="tel:07824973768">07824 973768  24/7</a></li>
                        <li><i class="fa fa-envelope-o"></i> <a
                                href="mailto:info@northwestcredithire.co.uk">info@northwestcredithire.co.uk</a></li>
                    </ul>
                    {{-- <form class="nch-foot-news" onsubmit="return false;">
                        <input type="email" placeholder="Your email for updates" aria-label="Email">
                        <button type="submit" aria-label="Subscribe"><i class="fa fa-long-arrow-right"></i></button>
                    </form> --}}
                </div>
            </div>
            {{-- <div class="nch-foot-mono" aria-hidden="true">NW</div> --}}
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Northwest Credit Hire Ltd &copy; {{date("Y")}}. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="footer-menu text-right">
                            <p>Built by <a
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
    <script src="{{asset("assets/javascript/validator.min.js")}}"></script>
    <script src="{{asset("assets/javascript/contact.js")}}"></script>

    <!-- NCH UI: floating nav scroll state, mobile menu, back-to-top, preloader -->
    <script>
        (function () {
            var header = document.getElementById('nch-header');
            var onScroll = function () {
                if (window.scrollY > 24) { header.classList.add('is-scrolled'); }
                else { header.classList.remove('is-scrolled'); }
                var btt = document.querySelector('.back-to-top');
                if (btt) { window.scrollY > 320 ? btt.classList.add('active') : btt.classList.remove('active'); }
            };
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();

            var burger = document.getElementById('nch-burger');
            var menu = document.getElementById('nch-menu');
            if (burger && menu) {
                burger.addEventListener('click', function (e) { e.stopPropagation(); menu.classList.toggle('open'); });
                menu.querySelectorAll('a').forEach(function (a) {
                    a.addEventListener('click', function () { menu.classList.remove('open'); });
                });
                // close the mobile menu when clicking outside it
                document.addEventListener('click', function (e) {
                    if (menu.classList.contains('open') && !menu.contains(e.target) && !burger.contains(e.target)) {
                        menu.classList.remove('open');
                    }
                });
                // close on Escape
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') { menu.classList.remove('open'); }
                });
            }

            var btt = document.querySelector('.back-to-top');
            if (btt) { btt.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); }); }

            window.addEventListener('load', function () {
                var pre = document.querySelector('.preloader');
                if (pre) { setTimeout(function () { pre.style.opacity = '0'; setTimeout(function () { pre.style.display = 'none'; }, 500); }, 350); }
            });
        })();
    </script>

    @yield("script")
</body>

</html>