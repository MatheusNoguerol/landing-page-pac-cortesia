<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* body{ 
            background-image: url('./images/fundo1.jpg');
            
        }
        nav#cabecalho{
        font-weight: bolder;
        }
        nav#cabecalho a:hover{
            color: blue;
        } */
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EDUCA-TERRA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src ="https://code.highcharts.com/highcharts.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/toastr.css') }}" rel="stylesheet"> -->

    <!-- <link rel="icon" href="{{ asset('images/iconeTeste.ico') }}" type="image/x-icon"> -->
    

</head>

<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
