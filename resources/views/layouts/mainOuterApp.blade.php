<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Cemls</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{ asset('newPublic/css/bootstrap.min.css') }}" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('newPublic/css/owl.carousel.min.css ') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('newPublic/css/styleab.css') }}" rel="stylesheet" type="text/css" />
   <link rel="shortcut icon" href="{{ asset('newPublic/images/favicon.ico') }}" type="image/x-icon" /> 
  {{-- @yield('styles') --}}
</head>

     
<body>
@include('partials.mainOuterHeader')

@yield('content')

@include('partials.footer')
@include('partials.mainOuterModal')

<script src="{{ asset('newPublic/js/jquery.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<script src="{{ asset('newPublic/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('newPublic/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('newPublic/js/custom.js') }}"></script>
<script type="text/javascript">
 $(function () {
            $('[data-toggle="tooltip"]').tooltip()
          })
</script>

@yield('scripts')
</body>

</html>

