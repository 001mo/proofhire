<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/SVGs/navbar-logo.svg') }}" />

    
    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    @yield('head_javascript')
    
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" type="text/css" />
    @yield('head_fonts')

    @yield('head_title')

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    @yield('head_css')
</head>
<body id="top"><!-- oncontextmenu="return false;" -->
    @yield('navbar')


    
    @yield('content')



    @yield('footer')



    <!------------------------------------------------- Bootstrap core JS ------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

    <!--------------------------------------------------- Third party plugin JS ------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!------------------------------------------------- Core theme JS ------------------------------------------------->
    <script src="{{ URL::asset('js/app.js') }}"></script>
    @yield('external_javascript')
    <body>
<html>