<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <script src="js/app.js"></script>
    </head>
    <body>
        
        <div class="container-fluid">
          <div class="row">
          
            <div id="content" class="col-sm-12 text-center">
              @yield('content')
            </div>
            
          </div>
          
        </div>
    </body>
</html>