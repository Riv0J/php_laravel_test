<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS URL:ASSET BUSCA LA RUTA ESTÉ DONDE ESTÉ-->
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/navbar-top-fixed.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/teddies.css')}}" rel="stylesheet">
    @yield('stylesheet')
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>
    <!-- INCLUDE DE BLADE -->
    @include('layout.nav')

    <main role="main" class="container">
        @yield('main')
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>


    @yield('script')
  </body>
</html>
