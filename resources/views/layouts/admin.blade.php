
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Cemls</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content=""/>
        <link rel="stylesheet" href="{{ asset('newPublic/css/bootstrap.min.css') }}" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('newPublic/images/favicon.ico') }}" type="image/x-icon"/>
        <link href="{{ asset('newPublic/css/adminab.css') }}" rel="stylesheet">
        @yield('styles')

    </head>
    <body>
    <main class="maincnt">
        @include('partials.header')
        <main class="adm_container clearfix collapse navbar-collapse" id="navbarSupportedContent">
            @include('partials.menu')
            @yield('content')

        </main>
        <footer class="adm_footer">
            <div class="container-lg">
                <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="ftabt">
                    <h2 class="ft_head">About CemLS<sup>®</sup></h2>
                    <p class="ftpara"><span>CemLS<sup>®</sup></span> is a cemetery property Listing service, enabling you to showcase all your available property from your administrative location or remotely with a smartphone or tablet.</p>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                        <h2 class="ft_head">Quick Navigation</h2>
                        <ul class="ftlinks">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Partner With Us</a></li>
                            <li><a href="#">360 Services</a></li>
                            <li><a href="#">Business Opportunity</a></li>
                        </ul>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                        <h2 class="ft_head">For Cemeteries</h2>
                        <ul class="ftlinks">
                            <li><a href="#">List Cemetery</a></li>
                            <li><a href="#">Look Leads</a></li>
                            <li><a href="#">Add Agents</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                        <h2 class="ft_head">For Sellers</h2>
                        <ul class="ftlinks">
                            <li><a href="#">List Products</a></li>
                            <li><a href="#">List Services</a></li>
                            <li><a href="#">List Facilities</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Low on Commissions</a></li>
                        </ul>
                        </div>
                    </div>
                </div>


                </div>

                <div class="ftbbx">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                    <ul class="ft_qlink">
                        <li>© 2018 Cemetery360</li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Helpdesk</a></li>
                    </ul>
                    <ul class="ftinfo">
                        <li><i class="fa fa-phone"></i> <a href="tel:(916) 330-4126">(916) 330-4126</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@cemls.com">info@cemls.com</a></li>
                    </ul>
                    </div>

                    <div class="col-lg-3 col-md-12">
                    <ul class="ftsocial">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </footer>

    </main>
    <script src="{{ asset('newPublic/js/jquery.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="{{ asset('newPublic/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    @yield('scripts')


    </body>
</html>
