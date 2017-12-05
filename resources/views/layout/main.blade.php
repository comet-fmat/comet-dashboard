<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script src="/js/app.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        @yield('metas')
    </head>
    <body>
        
        <div class="container-fluid">
          <div class="row">
            <title>Dashboard - @yield('title')</title>
          </div>
          <div class="row">
            <div id="sidebar" class="col-sm-2">
            @include('layout/sidebar')
            </div>
            <div class="col-sm-2">
            </div>
            <div id="content" class="col-sm-10">
              @yield('content')
            </div>
            
          </div>
          
        </div>
    </body>
</html>

<script>

</script>