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

    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('assets/css/colors.php?color=c85e51')}}" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/navigation.css')}}">
    <!-- car Specific Stylesheet -->

    <link rel="stylesheet" href="{{asset('assets/demos/car/css/car-icons/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/demos/car/css/fonts.css')}}" type="text/css" />

    <!-- / -->

    <!-- Document Title
    ============================================= -->
    <title>Multivendor Website</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }

        .tp-video-play-button { display: none !important; }

        .tp-caption { white-space: nowrap; }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="d-none d-md-block">

        <div class="container clearfix">

            <div class="col_half nobottommargin">

                <p class="nobottommargin"><strong>Call:</strong> 1800-547-2145 | <strong>Email:</strong> iwirecash@gmail.com</p>

            </div>

            <div class="col_half col_last fright nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        {{--<li><a href="#">USD</a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="#">EUR</a></li>--}}
                        {{--<li><a href="#">AUD</a></li>--}}
                        {{--<li><a href="#">GBP</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">EN</a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="#"><img src="images/icons/flags/french.png" alt="French"> FR</a></li>--}}
                        {{--<li><a href="#"><img src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>--}}
                        {{--<li><a href="#"><img src="images/icons/flags/german.png" alt="German"> DE</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        <li><a href="/login">Login</a>

                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    @include('Frontend.Elements.header')
    @yield('content')
    @include('Frontend.Elements.footer')

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


<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{asset('assets/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>

<script>

    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
                {
                    sliderType:"standard",
                    jsFileLocation:"include/rs-plugin/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {},
                    responsiveLevels:[1200,992,768,480,320],
                    gridwidth:1140,
                    gridheight:500,
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        disableFocusListener:false,
                    },
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"off",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "ares",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder"></span> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    }
                });

        apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
            SEMICOLON.slider.sliderParallaxDimensions();
        });

    }); //ready

</script>

</body>
</html>