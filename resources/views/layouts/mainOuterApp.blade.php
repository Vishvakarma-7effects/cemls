<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>CemLS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{ asset('newPublic/css/bootstrap.min.css') }}" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    {{-- <link href="{{ asset('newPublic/css/owl.carousel.min.css ') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('newPublic/css/styleab.css') }}" rel="stylesheet" type="text/css" />
   <link rel="shortcut icon" href="{{ asset('newPublic/images/favicon.ico') }}" type="image/x-icon" />  --}}


   <link href="{{ asset('newPublic/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('newPublic/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('newPublic/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('newPublic/css/styleab.css') }}" rel="stylesheet" type="text/css" />
  @yield('styles')
</head>

     
<body>
@if(empty(request()->segment(count(request()->segments()))))
  @include('partials.mainOuterIndexHeader')

@else
  @include('partials.mainOuterHeader')
@endif

@yield('content')

@if( url()->current() != url('cemeterys/cemeteryDetailPage' || 'cemeterys/cemeteryListView')) 

@endif
@include('partials.mainOuterModal')

<script src="{{ asset('newPublic/js/jquery.min.js') }}"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<script src="{{ asset('newPublic/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('newPublic/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('newPublic/js/custom.js') }}"></script>
<script type="text/javascript">
 $(function () {
            $('[data-toggle="tooltip"]').tooltip()
          })
</script> --}}


<script src="{{ asset('newPublic/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('newPublic/js/jquery-1.9.1.min.js' ) }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="{{ asset('newPublic/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('newPublic/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('newPublic/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('newPublic/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('newPublic/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('newPublic/js/jssor.js') }}"></script>
<script type="text/javascript" src="{{ asset('newPublic/js/jssor.slider.js') }}"></script>
<script type="text/javascript">
  $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      
      
</script>
@yield('scripts')
<?php
echo Request::segment(1);
?>
@if(Request::segment(1)!='cemeterys') 

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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">Quick Navigation</h2>
                        <ul class="ftlinks">
                            <li><a href="http://127.0.0.1:8000/aboutUs">About Us</a></li>
                            <li><a href="http://127.0.0.1:8000/contactUs">Contact Us</a></li>
                            
                        </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">For Cemeteries</h2>
                        <ul class="ftlinks">
                            <li><a href="http://127.0.0.1:8000/cemeterys">List Cemetery</a></li>
                            <li><a href="#">Look Leads</a></li>
                            
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
                        <li><a href="#">Terms &amp; Conditions</a></li>
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
@endif

</body>

</html>

