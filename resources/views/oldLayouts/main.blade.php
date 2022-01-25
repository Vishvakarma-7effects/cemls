<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta charset="utf-8" />
        <meta name="robots" content="index, follow, all" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta property="og:site_name" content="Neon" />
        <meta property="og:type" content="website" />
        <meta name="apple-mobile-web-app-title" content="Neon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
        <!-- Html Editor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="trumbowyg/dist/ui/trumbowyg.min.css">
        <!--<link rel="stylesheet" href="{{ asset('public/assets/css/theme/orange.css') }}">-->
        <link rel="stylesheet" href="{{ asset('assets/css/theme/green.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    </head>
    <body>
        <section class="header-main sticky-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3 order-0 order-lg-0 header-logo-wrapper">
                        <div class="brand-wrap">
                            <a href="{{ url('/') }}">
                                <img class="logo img-fluid" src="{{ asset('img/cemls_logo_2.png') }}" alt="360 X Stream">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 order-2 order-lg-1 mt-3 mb-3 mt-lg-0 mb-lg-0 header-search-wrapper">
                        <form action="#" class="search-wrap">
                            <!--                            <div class="input-icon">
                                                            <i class="fa fa-search"></i>
                                                            <input name="keyword" class="form-control top-search" placeholder="Search for events" type="text">
                                                        </div>-->
                        </form>
                    </div>
                    <div class="col-6 col-lg-4 text-right order-1 order-lg-2 header-actions-wrapper">
                        <div class="widgets-wrap d-flex justify-content-end">


                            @guest
                            <div class="widget-header">
                                <a href="{{ route('login') }}">
                                    <div class="icon-wrap icon-xs bg-primary round text-secondary d-lg-none d-xl-none">
                                        <i class="fas fa-sign-in-alt text-light fa-sm fa-fw"></i>
                                    </div>
                                    <span class="d-none d-lg-block">Sign in</span>
                                </a>
                            </div>
                            @if (Route::has('register'))
                            <div class="widget-header">
                                <a href="{{ route('register') }}">
                                    <div class="icon-wrap icon-xs bg-primary round text-secondary d-lg-none d-xl-none">
                                        <i class="fas fa-user-plus text-light fa-sm fa-fw"></i>
                                    </div>
                                    <span class="d-none d-lg-inline">Sign up</span>
                                </a>
                                <!--                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="signUpDrp">
                                                                    <a href="#" class="dropdown-item"><i class="fas fa-user fa-fw"></i> Attendee</a>
                                                                    <a href="#" class="dropdown-item"><i class="fas fa-calendar-plus fa-fw"></i> Organizer</a>
                                                                </div>-->
                            </div>
                            @endif
                            @else
                            <div class="widget-header">
                                <a href="javascript:void(0)" class="dropdown-toggle" aria-haspopup="true" id="signUpDrp" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="icon-wrap icon-xs bg-primary round text-secondary d-lg-none d-xl-none">
                                        <i class="fas fa-user-plus text-light fa-sm fa-fw"></i>
                                    </div>
                                    <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="signUpDrp">
                                    <a href="{{ url('dashboard') }}" class="dropdown-item">Dashboard</a>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"
                                       {{ __('Logout') }}
                                       class="dropdown-item">Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @endguest
                            <div class="widget-header d-lg-none">
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- @include('oldLayouts.header') --}}

        <!--============Main content=============-->
        <div>
            @yield('content')
        </div>
        <!--============Main content=============-->
        <!--        <footer class="section-footer border-top-gray">
                    <div class="container">
                        <section class="footer-top padding-top">
                            <div class="row">
                                <aside class="col-sm-6 col-lg-3">
                                    <h5 class="title text-dark">Useful Links</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#">
                                                About us
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Help center
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Venues
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Send us an email
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="col-sm-6 col-lg-3">
                                    <h5 class="title text-dark">Useful Links</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#">
                                                About us
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Help center
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Venues
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Send us an email
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="col-sm-6 col-lg-3">
                                    <h5 class="title text-dark">Useful Links</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <a href="#">
                                                About us
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Help center
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Venues
                                            </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">
                                                Send us an email
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="col-sm-6 col-lg-3">
                                    <article>
                                        <h5 class="title text-dark">Contact Us</h5>

                                        <p>
                                            <strong>Phone: </strong> +1888888 <br>
                                            <strong>Fax:</strong> +1888888
                                        </p>

                                        <div class="btn-group white">
                                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="https://www.facebook.com"><i class="fab fa-facebook-f fa-fw"></i></a>
                                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="https://www.instagram.com"><i class="fab fa-instagram fa-fw"></i></a>

                                            <a class="btn btn-youtube" title="Youtube" target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube fa-fw"></i></a>

                                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="https://www.twitter.com"><i class="fab fa-twitter fa-fw"></i></a>
                                        </div>

                                        <div class="clearfix"></div>
                                    </article>
                                </aside>
                            </div>
                            <br>
                        </section>
                        <section class="footer-bottom row">
                            <div class="col-sm-12">
                                <p class="text-dark-50 text-center">
                                    Copyright &copy;  2021
                                </p>
                            </div>
                        </section>
                    </div>
                </footer>-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Stay Tuned</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-center">Coming Soon</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <a class="material-scrolltop cursor-pointer btn btn-sm btn-primary"></a>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <!-- Chromecast SDK -->
        <script type="text/javascript" src="//www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>

        <!-- HTML EDITOR -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js" integrity="sha512-t4CFex/T+ioTF5y0QZnCY9r5fkE8bMf9uoNH2HNSwsiTaMQMO0C9KbKPMvwWNdVaEO51nDL3pAzg4ydjWXaqbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- THEOplayer library and css -->
        <script type="text/javascript" src="https://cdn.myth.theoplayer.com/b1a765b9-ec8f-439f-ae16-185d2be65d8f/THEOplayer.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.myth.theoplayer.com/b1a765b9-ec8f-439f-ae16-185d2be65d8f/ui.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


        @yield('scripts')
        <script>
                                           $(document).ready(function () {
                                               $('.myselect2').select2();
                                               $(function () {
                                                   var current = location.pathname;
                                                   $('#dashboard-menu li a').each(function () {
                                                       var $this = $(this);
                                                       // if the current path is like this link, make it active
                                                       if ($this.attr('href').indexOf(current) !== -1) {
                                                           $this.addClass('active');
                                                       }
                                                   })
                                               });
                                               $('.htmlEditor').trumbowyg();

                                               $('a').click(function () {
                                                   var get = $(this).attr('href');
                                                   if (get == '#') {
                                                       $('#exampleModal').modal('show');
                                                   }
                                               });
                                           });
        </script>

		 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    </body>
</html>
