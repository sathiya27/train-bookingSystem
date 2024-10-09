<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/templatemo-plot-listing.css')}}">
        <link rel="stylesheet" href="{{asset('css/animated.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.css')}}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="category.html">Category</a></li>
                    <li><a href="listing.html">Listing</a></li>
                    <li><a href="contact.html">Contact Us</a></li> 
                    <li><div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Listing</a></div></li> 
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
                </div>
            </div>
            </div>
        </header>
        <div class="main-banner">
            @yield('content')
        </div>
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/owl-carousel.js')}}"></script>
        <script src="{{asset('js/animation.js')}}"></script>
        <script src="{{asset('js/imagesloaded.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
