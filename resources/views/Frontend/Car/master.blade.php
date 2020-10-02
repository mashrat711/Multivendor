<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}" type="text/css" />
    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/bs-select.css')}}" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/bs-switches.css')}}" type="text/css" />



    <!-- car Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/demos/car/car.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/demos/car/css/car-icons/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/demos/car/css/fonts.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('assets/css/colors.php?color=c85e51')}}" type="text/css" />
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/navigation.css')}}">

    <!-- Document Title
    ============================================= -->
    <title>Single - Car Demo</title>

    <style>
        /* Revolution Slider */
        .ares .tp-tab { border: 1px solid #eee; }
        .ares .tp-tab-content { margin-top: -4px; }
        .ares .tp-tab-content { padding: 15px 15px 15px 110px; }
        .ares .tp-tab-image { width: 80px;height: 80px; }

        /*--------------------
        paginations
        ---------------------*/
        .dark .swiper-pagination span:nth-child(1):hover,
        .dark .swiper-pagination span:nth-child(1) { background-color: #7F858D }
        .dark .swiper-pagination span:nth-child(2):hover,
        .dark .swiper-pagination span:nth-child(2) { background-color: #CB394E }
        .dark .swiper-pagination span:nth-child(3):hover,
        .dark .swiper-pagination span:nth-child(3) { background-color: #75787B }
        .dark .swiper-pagination span:nth-child(4):hover,
        .dark .swiper-pagination span:nth-child(4) { background-color: #9C780E }
        .dropdown-toggle::after { margin-left: 0.255em; }

        /*--------------------
        Background
        --------------------*/
        .bg {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
        }

        /*--------------------
        Slider-text
        --------------------*/
        .slider-text {
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;
        }

        .slider-text h2 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .slider-text p {
            font-size: 17px;
            font-weight: 300;
            opacity: .7;
        }
        @media (min-width: 992px) {

            #page-menu-wrap { background-color: var(--light); }

            #page-menu .not-dark nav li:not(:last-child) { border-right: 1px solid #EEE }

            #page-menu .not-dark nav li a {
                color: #333;
                font-weight: 500;
                text-shadow: none;
            }
        }
        #page-title:hover .video-wrap,
        #page-title:hover .container {
            opacity: 0;
            z-index: -99;
        }

        .border-form-control { border-color: #DDD }


    </style>

</head>

<body class="stretched side-push-panel" data-loader-html="<div><img src='{{asset('assets/demos/car/images/page-loader.gif')}}' alt='Loader'></div>">

<!-- Side Panel Overlay -->
<div class="body-overlay"></div>

<!-- Side Panel -->
<div id="side-panel">

    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

    <div class="side-panel-wrap">

        <div class="widget clearfix">

            <a href="index.html"><img src="{{asset('assets/demos/car/images/logo@2x.png')}}" alt="Canvas Logo" height="50"></a>

            <p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>

            <div class="widget quick-contact-widget form-widget noborder notoppadding clearfix">

                <h4>Quick Contact</h4>
                <div class="form-result"></div>
                <form id="quick-contact-form" name="quick-contact-form" action="{{asset('assets/include/form.php')}}" method="post" class="quick-contact-form nobottommargin">
                    <div class="form-process"></div>
                    <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                    <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                    <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                    <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                    <input type="hidden" name="prefix" value="quick-contact-form-">
                    <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
                </form>

            </div>


        </div>

    </div>

</div>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="static-sticky full-header clearfix">

        <div id="header-wrap">

            <div class="container-fluid clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                    ============================================= -->
                <div id="logo">
                    <a href="" class="standard-logo"><img src="{{asset('assets/images/brian/brian.png')}}" alt="Canvas Logo"></a>
                    <a href="" class="retina-logo"><img src="{{asset('assets/demos/car/images/logo.png')}}" alt="Canvas Logo"></a>
                    <li class="nav-item dropdown" style="list-style: none">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                           href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"
                        >
                        <span class="badge badge-pill badge-dark">
                            <i class="icon-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                            <ul class="list-group" style="margin: 20px;">
                                @include('partials.cart-drop')
                            </ul>

                        </div>
                    </li>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="with-arrows clearfix">
                    <ul>
                        <li><a href="/first"><div>Home</div></a></li>
                        <!-- Mega Menu -->

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

        <div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>

    </header><!-- #header end -->


@yield('content')


    <!-- Footer
      ============================================= -->
    <footer id="footer" class="dark noborder" style="background-color: #080808;">

        <div class="container-fluid clearfix">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix" style="padding: 30px;">

                <div class="row clearfix">
                    <div class="col-lg-6">

                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Hire</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Community</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                    <li><a href="#">Support Forums</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Learn</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth col_last">
                            <div class="widget widget_links clearfix">
                                <h4>About</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 fright tright col_last">

                        <img src="../../../../public/assets/demos/car/images/logo-footer.png" alt="" height="50" style="margin-top: ">
                        <br>
                        <div style="color: #444">
                            <span>&copy; Canvas Automotive. All Rights Reserved.</span><div class="clear"></div>
                            <p style="margin-top: 10px;">Objectively restore standards compliant opportunities whereas one-to-one collaboration and idea-sharing.</p>
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

<!-- Contact Button
============================================= -->
<div id="contact-me" class="icon-line-mail side-panel-trigger bgcolor"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>

<script src="{{asset('https://maps.google.com/maps/api/js?key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA')}}"></script>
<script src="{{asset('assets/js/jquery.gmap.js')}}"></script>
<!-- Bootstrap Select Plugin -->
<script src="{{asset('assets/js/components/bs-select.js')}}"></script>

<!-- Bootstrap Switch Plugin -->
<script src="{{asset('assets/js/components/bs-switches.js')}}"></script>
<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/functions.js')}}"></script>

<script>

    jQuery('#google-map').gMap({

        maptype: 'ROADMAP',
        latitude: 41.8333925,
        longitude: -88.0121473,
        zoom: 4,
        markers: [
            {
                address: "San Francisco, USA",
                html: '<div><h4 style="margin-bottom: 8px;">Porsche Centre</h4> <address> <strong>Headquarters:</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> </address> <abbr><strong>Phone:</strong></abbr> (91) 8547 632521<br> <abbr><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> <abbr><strong>Email:</strong></abbr> info@canvas.com </div>',
                icon: {
                    image: "../../images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [13,39]
                }
            },
            {
                address: "New York, USA",
                html: '<div><h4 style="margin-bottom: 8px;">Porsche Centre</h4> <address> <strong>Headquarters:</strong><br> 795 Folsom Ave, Suite 600<br> New York, USA 94107<br> </address> <abbr><strong>Phone:</strong></abbr> (91) 8547 632521<br> <abbr><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> <abbr><strong>Email:</strong></abbr> info@canvas.com </div>',
                icon: {
                    image: "../../images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [13,39]
                }
            },
            {
                address: "Washington, USA",
                html: '<div><h4 style="margin-bottom: 8px;">Porsche Centre</h4> <address> <strong>Headquarters:</strong><br> 795 Folsom Ave, Suite 600<br> Washington, USA 94107<br> </address> <abbr><strong>Phone:</strong></abbr> (91) 8547 632521<br> <abbr><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> <abbr><strong>Email:</strong></abbr> info@canvas.com </div>',
                icon: {
                    image: "../../images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [13,39]
                }
            },
            {
                address: "Chicago, USA",
                html: '<div><h4 style="margin-bottom: 8px;">Porsche Centre</h4> <address> <strong>Headquarters:</strong><br> 795 Folsom Ave, Suite 600<br> Chicago, USA 94107<br> </address> <abbr><strong>Phone:</strong></abbr> (91) 8547 632521<br> <abbr><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> <abbr><strong>Email:</strong></abbr> info@canvas.com </div>',
                icon: {
                    image: "../../images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [13,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });
    jQuery(".bt-switch").bootstrapSwitch();

</script>


</body>
</html>