<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SEC | Sistema de Evaluacion por Competencias</title>

        <!-- Fonts -->        
        <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

        <!-- Styles -->
        
    </head>
    <body style="background:#F7F7F7;">        
        <div class="gray-bg">
            @include('layouts.topnavbar')            
            @yield('content')   
            @include('layouts.footer')
        </div>                      
        <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
        @show
    </body>
</html>
