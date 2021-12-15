<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
        <link rel="stylesheet" href="{{ asset('public/assets/css/cmls/index.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/swiper.css') }}">
    </head>
    <body class="html front not-logged-in no-sidebars page-node page-node- page-node-28175 node-type-page">
        <div class="body">
            <header id="header" data-plugin-options='{"stickyEnabled": false, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="{{url('/')}}" title="Home" rel="home" id="logo"><img src="{{ asset('public/assets/img/logo.png') }}" alt="Home" data-sticky-top="33"></a>
                                </div>
                            </div>
                            <div class="header-column header-column-valign-top">
                                <div class="header-search hidden-xs"></div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container container header-nav header-nav-push-top">
                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                            <nav class="nav-main">
                                <ul class="nav nav-pills nav-main" id="mainMenu">
                                    <?php

                                    use Illuminate\Support\Facades\DB;

$menus = DB::table('menus')
                                            ->select('id', 'menuName', 'customLink', 'newTab')
                                            ->where('rank_order', '>', 0)
                                            ->where('onHome', 'yes')
                                            ->orderBy('rank_order', 'asc')
                                            ->get();
                                    ?>

                                    @foreach($menus as $key => $menu)
                                    <li class="{{ url()->current() == $menu->customLink ? 'active' : '' }}">
                                        <a {{$menu->newTab ? 'target=_blank' : ''}} href="{{$menu->customLink}}"  class="{{ url()->current() == $menu->customLink ? 'active' : '' }}">{{$menu->menuName}}</a>
                                    </li>
                                    @endforeach
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>

                                    @else
                                    <li>
                                        <a href="{{ url('dashboard') }}">My Account</a>
                                    </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header><!-- end header -->
            <!--=========Main Content===========-->
            <div>
                @yield('content')
            </div>
            <!--=========Main Content===========-->
            <footer id="footer">
                <div class="container main-footer">
                    <div class="row">
                        <div class="footer-ribbon">
                            <span><em class="placeholder">Get In Touch</em></span>
                        </div>
                        <div class="col-md-3">
                            <div class="region region-footer-1">
                                <div class="region region-footer-1">
                                    <div class="region region-footer-1">
                                        <div id="block-block-16" class="block block-block">
                                            <h2>Contact Us</h2>
                                            <div class="content">
                                                <ul class="contact">
                                                    <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 247 Rochdale Street, Roseville, CA 95661, United States</p></li>
                                                    <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (916) XXXX-XX6</p></li>
                                                    <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@360xstream.com">info@360xstream.com</a></p></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="region region-footer-2">
                                <div class="region region-footer-2">
                                    <div id="block-block-10" class="block block-block">
                                        <div class="content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="region region-footer-3">
                                <div class="region region-footer-3">
                                    <div id="block-block-11" class="block block-block">
                                        <div class="content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="region region-footer-4">
                                <div class="region region-footer-4">
                                    <div id="block-block-17" class="block block-block">
                                        <h2>Follow Us</h2>
                                        <div class="content">
                                            <ul class="header-social-icons social-icons hidden-xs">
                                                <li class="social-icons-facebook"><a href="https://www.facebook.com/360xstream-611526778985591" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li class="social-icons-twitter"><a href="http://twitter.com/360xstream" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/in/jimmy-pinocchio-p-e-b72b9590" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="region region-footer-bottom-left">
                                    <div id="block-block-14" class="block block-block">
                                        <div class="content">
                                            <p>360xstream © Copyright 2021 by 360xstream, Inc.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="region region-footer-bottom-right">
                                    <div id="block-block-15" class="block block-block">
                                        <div class="content">
                                            <nav id="sub-menu">
                                                <ul>
                                                    <li>
                                                        <a href="#">FAQ's</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('public/assets/js/swiper.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        @yield('scripts')
    </body>
</html>