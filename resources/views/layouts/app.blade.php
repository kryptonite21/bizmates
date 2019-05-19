<!DOCTYPE html>
<html>
  <head>
    <title>Bizmates | Weather</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('startbootstrap/css/bootstrap.min.css') }}">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </head>
  <body>
    @include('layouts.header')
    
    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
  </body>
</html>