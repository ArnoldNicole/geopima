<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{strtoupper(Route::currentRouteName())}} | GEOPIMA</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <meta name="twitter:image" content="assets/img/geopima.png">
    <meta property="og:image" content="assets/img/geopima.png">
    <meta name="description" content="Geopima Company Limited Land Surveyors, is a fully professional surveying firm that was incorporated in 2018.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GEOPIMA LTD">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sarabun:300,300i,400,400i,500,600,700,800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/latest/assets/css/vendor/bootstrap.min.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="/latest/assets/css/plugins/slick.min.css">
    <!-- Odometer css -->
    <link rel="stylesheet" href="/latest/assets/css/plugins/odometer.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/latest/assets/css/plugins/animate.css">
    <!-- main style css -->
    <link rel="stylesheet" href="/latest/assets/css/style.css">

</head>

<body>
    <!-- Start Header Area -->
    <header class="header-area">
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-4">
                            <div class="header-top-left text-center text-sm-left">
                                Call us:<a href="tel:+254707151860" target="_blank"> +254707151860</a>
                            </div>
                        </div>
                        <!-- <div class="col-sm-4">
                        <div class="login-register text-center">
                            <a href="#">Login/Register</a>
                        </div>
                    </div> -->
                        <div class="col-sm-8">
                            <div class="header-settings-bar d-flex justify-content-end">
                                <div class="header-social-link text-center text-sm-right">
                                    <a href="{{route('welcome')}}#"><i class="fa fa-facebook"></i></a>
                                    <a href="{{route('welcome')}}#"><i class="fa fa-twitter"></i></a>
                                    <a href="{{route('welcome')}}#"><i class="fa fa-instagram"></i></a>
                                    <a href="{{route('welcome')}}#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top start -->

            <!-- main menu start -->
            <div class="main-menu-wrapper sticky header-transparent">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <!-- logo area start -->
                            <div class="brand-logo">
                                <a href="{{route('welcome')}}">
                                    <img src="/assets/img/geopima_small.png" alt="brand logo">
                                </a>
                            </div>
                            <!-- logo area end -->
                        </div>
                        <div class="col-lg-9">
                            <div class="main-menu-inner">
                                <!-- main menu navbar start -->
                                <nav class="main-menu">
                                    <ul>
                                        <li class="{{Route::currentRouteName() == 'welcome' ? 'active' : ''}}"><a href="{{route('welcome')}}">Home</a></li>
                                        <li class="{{Route::currentRouteName() == 'about' ? 'active' : ''}}"><a href="{{route('about')}}">About us</a></li>
                                        <li class="{{Route::currentRouteName() == 'services' ? 'active' : ''}}"><a href="{{route('services')}}">Services</a></li>
                                        <li class="{{Route::currentRouteName() == 'contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
                                        <!-- <li class="{{Route::currentRouteName() == 'faqs' ? 'active' : ''}}"><a href="{{route('welcome')}}#"> F.A.Qs </a></li> -->
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu end -->
        </div>

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="{{route('welcome')}}">
                                    <img src="/assets/img/geopima_small.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <!-- search box end -->

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About us</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                                <li><a href="{{route('welcome')}}#">F.A.Qs</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->


                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li><i class="fa fa-mobile"></i>
                                    <a href="tel:+254707151860" target="_blank">+254707151860</a>
                                </li>
                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="mailto:support@geopima.com" target="_blank">support@geopima.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="{{route('welcome')}}#"><i class="fa fa-facebook"></i></a>
                            <a href="{{route('welcome')}}#"><i class="fa fa-twitter"></i></a>
                            <a href="{{route('welcome')}}#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="{{route('welcome')}}#"><i class="fa fa-linkedin"></i></a>
                            <a href="{{route('welcome')}}#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->

    </header>
    <!-- end Header Area -->

    @yield('content')
    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer section start -->
    <footer>
        <div class="footer-widget-area gray-bg section-padding pb-125">
            <div class="container">
                <div class="row mtn-40">
                    <div class="col-lg-3 col-md-6">
                        <!-- footer single widget start -->
                        <div class="footer-single-widget mt-40">
                            <div class="widget-logo">
                                <a href="/">
                                    <img src="/assets/img/geopima_small.png" alt="">
                                </a>
                            </div>
                            <div class="widget-body">
                                <p class="desc">Do Not Go For Less, Get The Best</p>
                                <ul class="contact-info">
                                    <li><span>Address: </span>Kwale, Kinangop Road Behind Equity Bank, Kenya</li>
                                    <li><span>Phone:</span> +254707151860 </li>
                                    <li><span>Web:</span> support@geopima.com <br>www.geopima.com</li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer single widget start -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- footer single widget start -->
                        <div class="footer-single-widget mt-40">
                            <h3 class="widget-title">Our Link</h3>
                            <div class="widget-body">
                                <ul class="useful-link">
                                    <li><a href="{{route('welcome')}}">Home</a></li>
                                    <li><a href="{{route('contact')}}">Support</a></li>
                                    <li><a href="{{route('welcome')}}">About us</a></li>
                                    <li><a href="{{route('welcome')}}">Services</a></li>
                                    <li><a href="{{route('welcome')}}">More Info</a></li>
                                    <li><a href="{{route('welcome')}}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer single widget start -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- footer single widget start -->
                        <div class="footer-single-widget mt-40">

                        </div>
                        <!-- footer single widget start -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- footer single widget start -->
                        <div class="footer-single-widget mt-40">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="widget-body news-subtitle">
                                <p class="desc">Subscribe our Newsletter and become the first to hear our offers</p>
                                <p><b>To get all latest update and news Subscribe our newsletter now!</b></p>
                                <div class="newsletter-inner">
                                    <form id="mc-form">
                                        <input type="email" class="news-field" id="mc-email" autocomplete="off" placeholder="Enter your email here">
                                        <button class="btn btn-all" id="mc-submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                        <!-- footer single widget start -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-text text-center">
                    <p>&copy; {{\Carbon\Carbon::now()->year}} <b>GEOPIMA</b> Made with <i class="fa fa-heart text-danger"></i> <a href=""><b></b></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="/latest/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="/latest/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Popper JS -->
    <script src="/latest/assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/latest/assets/js/vendor/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="/latest/assets/js/plugins/wow.min.js"></script>
    <!-- slick Slider JS -->
    <script src="/latest/assets/js/plugins/slick.min.js"></script>
    <!-- odometer js -->
    <script src="/latest/assets/js/plugins/odometer.min.js"></script>
    <!-- appear js -->
    <script src="/latest/assets/js/plugins/appear.min.js"></script>
    <!-- mailchimp active js -->
    <script src="/latest/assets/js/plugins/ajaxchimp.js"></script>
    <!-- waypoint js  -->
    <script src="/latest/assets/js/plugins/waypoints.min.js"></script>
    <!-- google map api -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script> -->
    <!-- google map active js -->
    <!-- <script src="/latest/assets/js/plugins/google-map.js"></script> -->
    <!-- Main JS -->
    <script src="/latest/assets/js/main.js"></script>
</body>

</html>