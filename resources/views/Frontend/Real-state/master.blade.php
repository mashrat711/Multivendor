<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />


    <!-- Stylesheets
    ============================================= -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />

    <!-- Real Estate Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/demos/real-estate/real-estate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/demos/real-estate/css/font-icons.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/demos/real-estate/fonts.css')}}" type="text/css" />

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/bs-select.css')}}" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/bs-switches.css')}}" type="text/css" />

    <!-- Range Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/ion.rangeslider.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('assets/css/colors.php?color=2C3E50')}}" type="text/css" />


    <!-- Document Title
    ============================================= -->
    <title>Single - Real Estate</title>

    <style>

        .slider-element .real-estate-info-wrap {
            position: absolute;
            left: auto;
            bottom: 20px;
            width: 100%;
        }

        .real-estate-price {
            position: absolute;
            top: auto;
            left: auto;
            right: 0;
            bottom: 50px;
            z-index: 1;
        }

        .real-estate-price h3 {
            display: block;
            color: #FFF;
            font-size: 44px;
            margin: 0;
            font-weight: 400;
        }

        @media (max-width: 991px) {
            .real-estate-price {
                position: relative;
                top: auto;
                bottom: auto;
                right: 0;
                margin-top: 15px;
            }

            .slider-element .heading-block >h2 {
                font-size: 24px;
            }

            .slider-element .heading-block { width: auto !important; }
        }
    </style>

</head>

<body class="stretched side-push-panel">

<div id="side-panel">

    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

    <div class="side-panel-wrap">

        <div class="widget clearfix">

            <h4 class="t400">Login with Social Profiles</h4>

            <a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-facebook">Facebook</a>
            <a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-gplus">Google</a>

            <div class="line"></div>

            <h4 class="t400">Existing Account?</h4>

            <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                <div class="col_full">
                    <label for="login-form-username" class="t400">Username:</label>
                    <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
                </div>

                <div class="col_full">
                    <label for="login-form-password" class="t400">Password:</label>
                    <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
                </div>

                <div class="col_full nobottommargin">
                    <button class="button button-rounded t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                    <a href="#" class="fright">Forgot Password?</a>
                </div>

            </form>


        </div>

    </div>

</div>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->


    <!-- Header
    ============================================= -->
    <header id="header" class="static-sticky transparent-header dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="#" data-dark-logo="images/logo.png" class="standard-logo"><img src="{{asset('assets/images/brian/brian.png')}}" alt="Canvas Logo"></a>
                    <a href="#" data-dark-logo="images/logo@2x.png" class="retina-logo"><img src="{{asset('assets/images/brian/brian.png')}}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="with-arrows clearfix">
                    <ul>
                        <li><a href="/first"><div>Home</div></a></li>
                        <!-- Mega Menu -->
                        <li class="mega-menu current"><a href="car-single.blade.php"><div>Models</div></a>
                            <div class="mega-menu-content style-2 clearfix">
                                <ul class="mega-menu-column col-lg-12">
                                    <li>
                                        <div class="widget center clearfix">

                                            <h3 class="nobottommargin">Pages</h3>
                                            <a href="#" class="button button-small button-rounded button-border button-dark button-black font-primary" style="margin: 10px 0 40px">Show all Cars</a>

                                            <!-- Mega Menu Cars Carousel -->
                                            <div class="owl-carousel customjs image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-lg="6" data-items-xl="6">
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/1.png" alt="Car">BMW 1 Series ActiveE</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/4.png" alt="Car">Mercedes-Benz S-Class</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/5.png" alt="Car">Gran Turismo</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/6.png" alt="Car">Mclaren 675LT SPIDER</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/7.png" alt="Car">Honda City</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/8.png" alt="Car">Toyota Qualis</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/9.png" alt="Car">Honda WR-V</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/10.png" alt="Car">Suzuki Breeza</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/2.png" alt="Car">Chevrolet Spark</a></div>
                                                <div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/3.png" alt="Car">Honda JaZZ</a></div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{route('carLists')}}"><div>Car Listing</div></a></li>
                        <li><a href="{{route('propertyLists')}}"><div>Property</div></a></li>
                        <li><a href="{{route('autoLists')}}"><div>Autos</div></a></li>
                        <li><a href="{{route('jobLists')}}"><div>Jobs</div></a></li>
                        {{--<li><a href="../../../../public/assets/demos/car/car-blog.html"><div>Blog</div></a></li>--}}
                        <li><a href=""><div>Contacts</div></a></li>

                    </ul>
                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    @yield('content')
<!-- Footer
		============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_fifth">

                    <div class="widget clearfix">

                        <img src="images/logo@2x.png" style="position: relative; opacity: 0.85; left: -10px; max-height: 80px; margin-bottom: 20px;" alt="Footer Logo">

                        <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

                        <div class="line" style="margin: 30px 0;"></div>

                        <p class="ls1 t300" style="opacity: 0.6; font-size: 13px;">Copyrights &copy; 2017 Canvas: Real Estate</p>

                    </div>

                </div>

                <div class="col_three_fifth col_last">

                    <div class="col_half">
                        <div class="row clearfix">

                            <h4 class="ls1 t400 uppercase">Popular Locations</h4>

                            <div class="col-6 bottommargin-sm widget_links widget_real_estate_popular">
                                <ul>
                                    <li><a href="#"><i class="icon-map-marker2"></i> California</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Nevada</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Hawaii</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Washington</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Ottawa</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Virginia</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Ohio</a></li>
                                </ul>
                            </div>

                            <div class="col-6 bottommargin-sm widget_links widget_real_estate_popular">
                                <ul>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Oregon</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Colorado</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Kentucky</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Texas</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Miami</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> New Jersey</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col_half col_last">

                        <h4 class="ls1 t400 uppercase">Connect Socially</h4>

                        <div class="bottommargin-sm clearfix">
                            <a href="#" class="social-icon si-colored si-small si-rounded si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-colored si-small si-rounded si-twitter" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-colored si-small si-rounded si-instagram" title="Instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>

                            <a href="#" class="social-icon si-colored si-small si-rounded si-apple" title="App Store">
                                <i class="icon-apple"></i>
                                <i class="icon-apple"></i>
                            </a>

                            <a href="#" class="social-icon si-colored si-small si-rounded si-android" title="Play Store">
                                <i class="icon-android"></i>
                                <i class="icon-android"></i>
                            </a>

                            <a href="#" class="social-icon si-colored si-small si-rounded si-skype" title="Skype">
                                <i class="icon-skype"></i>
                                <i class="icon-skype"></i>
                            </a>
                        </div>

                        <div class="widget subscribe-widget subscribe-form clearfix" data-loader="button">
                            <div class="widget-subscribe-form-result"></div>
                            <form action="../../../public/assets/include/subscribe.php" method="post" class="nobottommargin">
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="sm-form-control not-dark required email" placeholder="Enter your Email">
                                <button class="button button-3d button-black noleftmargin norightmargin" style="margin-top: 15px;" type="submit">Subscribe</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- External JavaScripts
============================================= -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>


<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/functions.js')}}"></script>
<!-- Bootstrap Select Plugin -->
<script src="{{asset('assets/js/components/bs-select.js')}}"></script>

<!-- Bootstrap Switch Plugin -->
<script src="{{asset('assets/js/components/bs-switches.js')}}"></script>

<!-- Range Slider Plugin -->
<script src="{{asset('assets/js/components/rangeslider.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="../../js/functions.js"></script>

<script type="text/javascript">

    jQuery(document).ready(function(){

        $(".price-range-slider").ionRangeSlider({
            type: "double",
            prefix: "$",
            min: 200,
            max: 10000,
            max_postfix: "+"
        });

        $(".area-range-slider").ionRangeSlider({
            type: "double",
            min: 50,
            max: 20000,
            from: 50,
            to: 20000,
            postfix: " sqm.",
            max_postfix: "+"
        });

        jQuery(".bt-switch").bootstrapSwitch();

        jQuery('.more-search').click(function(){
            jQuery('.expand-link').slideToggle(400);
        });

    });


</script>

</body>
</html>