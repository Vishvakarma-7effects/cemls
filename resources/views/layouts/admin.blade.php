
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
               @include('partials.footer')

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
