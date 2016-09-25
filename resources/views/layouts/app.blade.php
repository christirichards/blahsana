@extends('partials.header')
    @extends('partials.navbar')
    <div class="container-fluid">
      <div class="row">
        @extends('partials.sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @yield('content')
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/app/js/bootstrap.min.js"></script>

  </body>
</html>
