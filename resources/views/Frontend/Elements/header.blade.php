<!-- Header
   ============================================= -->
<header id="header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="{{asset('assets/images/brian/brian.png')}}"><img src="{{asset('assets/images/brian/brian.png')}}" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="{{asset('assets/images/brian/brian.png')}}"><img src="{{asset('assets/images/brian/brian.png')}}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li class="current"><a href="#"><div>Home</div><span>Lets Start</span></a>

                    </li>
                    <!-- Mega Menu
                    ============================================= -->

                    <li><a href="{{route('productLists')}}"><div>Fashion</div><span>Awesome Works</span></a></li>
                    <li><a href="{{route('carLists')}}"><div>Cars</div><span>Awesome Works</span></a></li>
                    <li><a href="{{route('propertyLists')}}"><div>Properties</div><span>Latest News</span></a></li>
                    <li><a href="{{route('jobLists')}}"><div>Jobs</div><span>Latest News</span></a></li>
                    <li><a href="{{route('autoLists')}}"><div>Autos</div><span>Get In Touch</span></a></li>
                </ul>

                <!-- Top Cart
                ============================================= -->
                <div id="top-cart">
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>{{ \Cart::getTotalQuantity()}}</span></a>
                    <div id="" class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                           href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"
                        >
                            {{--<span class="badge badge-pill badge-dark">--}}
                            {{--<i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}--}}
                            {{--</span>--}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                            <ul class="list-group" style="margin: 20px;">
                                @include('partials.cart-drop')
                            </ul>

                        </div>

                    </div>
                </div><!-- #top-cart end -->

                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
