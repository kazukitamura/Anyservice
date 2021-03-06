<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
        @yield('stylesheet')
        <script src="../../js/app.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- Scripts（Jquery） -->
  　　  　<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Scripts（bootstrapのjavascript） -->
    </head>
    <body>
       @yield('content'); 
    </body>
</html>
