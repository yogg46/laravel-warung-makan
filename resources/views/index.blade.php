<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Noxfolio - Personal Portfolio Resume HTML Template || Home</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('/landing/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/animate.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('/landing/assets/css/style.css') }}">

</head>

<body class="home-one">
    <div class="page-wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader"></div> --}}

        <!-- main header -->
        <header class="main-header menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container container-1620 clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="index.html"><img src="/landing/assets/images/logos/logo.png"
                                        alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer clearfix mx-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo my-15">
                                        <a href="index.html">
                                            <img src="/landing/assets/images/logos/logo.png" alt="Logo"
                                                title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">MultiPage</a></li>
                                                <li><a href="indexonepage.html">OnePage</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about</a></li>

                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns">
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button>
                                    {{-- <i class="fa fa-user"></i> --}}
                                    @auth
                                        <img src="/landing/assets/images/shape/sidebar-tottler.svg" alt="Toggler">
                                    @else
                                        <i class="fa fa-user"></i>
                                    @endauth
                                </button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                @auth
                    <div class="title">
                        <h4>Get Appointment</h4>
                    </div>

                    <!--Appointment Form-->
                    <div class="appointment-form">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="text" name="text" value="" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn">Submit now</button>
                            </div>
                        </form>
                    </div>

                    <!--Social Icons-->
                    <div class="social-style-one">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                @else
                    <div class="title">
                        <h4>Sign In</h4>
                    </div>

                    <div class="contact-page-form contact-form form-style-one wow fadeInUp delay-0-2s animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <form id="contactForm" class="contactForm" name="contactForm"
                            action="assets/php/form-process.php" method="post" novalidate="true">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="" placeholder="Richard D. Hammond" required=""
                                            data-error="Please enter your Name">
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            value="" placeholder="support@gmail.com" required=""
                                            data-error="Please enter your Email">
                                        <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn disabled"
                                            style="pointer-events: all; cursor: pointer;">Send Us <i
                                                class="far fa-angle-right"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endauth
            </div>
        </section>
        <!--End Hidden Sidebar -->



        <!-- Client Log start -->
        <div class="client-logo-area rel z-1 pt-130 rpt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center pt-5 mb-65 wow fadeInUp delay-0-2s">
                            <h6>I’ve <span>1253+ Global Clients</span> & lot’s of Project Complete</h6>
                        </div>
                    </div>
                </div>
                <div class="client-logo-wrap">
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo1.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo2.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo3.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo4.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo5.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo6.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo7.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo8.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo9.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.html">
                        <img src="/landing/assets/images/client-logos/client-logo10.png" alt="Client Logo">
                    </a>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </div>
        <!-- Client Log end -->


        <!-- footer area start -->
        <footer class="main-footer rel z-1">
            <div class="footer-top-wrap bgc-black pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <div class="footer-widget widget_logo wow fadeInUp delay-0-2s">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="/landing/assets/images/logos/logo.png"
                                            alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                                <h6 class="footer-title">Quick Link</h6>
                                <ul>
                                    <li><a href="services.html">Service</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="services.html#pricing">Pricing</a></li>
                                    <li><a href="about.html#faqs">Faqs</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget widget_newsletter wow fadeInUp delay-0-4s">
                                <form action="#">
                                    <label for="email-address"><i class="far fa-envelope"></i></label>
                                    <input id="email-address" type="email" placeholder="Email Address" required>
                                    <button>Sign Up <i class="far fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-widget widget_contact_info wow fadeInUp delay-0-6s">
                                <h6 class="footer-title">Address</h6>
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i> 55 Main Street, 2nd block, New York City
                                    </li>
                                    <li><i class="far fa-envelope"></i> <a
                                            href="mailto:support@gmail.com">support@gmail.com</a></li>
                                    <li><i class="far fa-phone"></i> <a href="callto:+880(123)45688">+880 (123) 456
                                            88</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-5 rpt-25">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright @2023, <a href="index.html">Noxfolio</a> All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <ul class="footer-bottom-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><span
                            class="fas fa-angle-double-up"></span></button>
                </div>
                <div class="bg-lines">
                    <span></span><span></span>
                    <span></span><span></span>
                    <span></span><span></span>
                    <span></span><span></span>
                    <span></span><span></span>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

    </div>
    <!--End pagewrapper-->


    <!-- Jquery -->
    <script src="/landing/assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="/landing/assets/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="/landing/assets/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="/landing/assets/js/slick.min.js"></script>
    <!-- Nice Select -->
    <script src="/landing/assets/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="/landing/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="/landing/assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="/landing/assets/js/wow.min.js"></script>
    <!-- Custom script -->
    <script src="/landing/assets/js/script.js"></script>

    <!-- For Contact Form -->
    <script src="/landing/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/landing/assets/js/form-validator.min.js"></script>
    <script src="/landing/assets/js/contact-form-script.js"></script>

</body>

</html>
