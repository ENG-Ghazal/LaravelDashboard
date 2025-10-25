<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Full Laravel  </title>

    <!-- Bootstrap -->
    <link href="{{ asset('backend/controlPanel/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link  href="{{ asset('backend/controlPanel/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link  href="{{ asset('css/myStyle.css') }}" rel="stylesheet">

</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- top navigation -->
        @include('backend/includes/header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')

        <!-- /page content -->

        <!-- footer content -->
        @include('backend/includes/footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script  src="{{ asset('backend/controlPanel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script  src="{{ asset('backend/controlPanel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script  src="{{ asset('js/mjJs.js') }}"></script>
    @stack('js')

  </body>
</html>
