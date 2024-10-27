<!DOCTYPE html>
<html lang="en-US" class>  
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="referrer" content="origin">
        <title>{{ $meta->title }}</title>
        <meta name="description" content="{{ $meta->meta_description }}">
        <link rel="canonical" href="{{ Request::url() }}" />
        <!--<link rel=alternate href="https://www.qi-a.com" hreflang=en-US />-->
        <link rel="icon" type="image/png" href="{{ asset('storage/logo/'. get_option('favicon')) }}">
        @if(Route::currentRouteName() === 'qiss-lab-v2')
            <meta name="robots" content="noindex, nofollow">
        @else
            <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        @endif

        <meta name="google-site-verification" content="jDuDbVHWdvLqEozHeXP1WaMogup96b5tmJMABcckKaI" />

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-language" content="en">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:site_name" content="{{ get_option('company_name') }}">
        

        <meta name="author" content="{{ get_option('company_name') }} : {{ Request::root() }} : {{ get_option('email') }}">
        <meta name="keywords" content="{{ $meta->meta_keyword }}" />
        

        <!-- For Open Graph -->
        <meta property="og:url" content="{{ Request::fullUrl() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $meta->meta_title }}">
        <meta property="og:description" content="{{ $meta->meta_description }}">
        <meta property="og:image" content="{{ asset('storage/logo/'. get_option('logo')) }}">

        <!-- For Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:creator" content="{{ get_option('company_name') }}" />
        <meta name="twitter:title" content="{{ $meta->meta_title }}" />
        <meta name="twitter:description" content="{{ $meta->meta_description }}" />
        <meta name="twitter:site" content="{{ Request::fullUrl() }}" />
        <meta name="twitter:image" content="{{ asset('storage/logo/'. get_option('logo')) }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/boxicons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/popup.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/spacing.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">        
    </head>
    <body class="defult-home">

		<!-- Main content -->
        <div class="main-content" style="background:#ffffff !important;">
            
            @include('_partials.frontend.header')

            @section('content')
            @show
        </div> 
        
        @include('_partials.frontend.footer')

     
        <!-- Footer -->

        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>

        <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/menu.js') }}"></script> 
        <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/points.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>   
        <script src="{{ asset('assets/js/particles.min.js') }}"></script>  
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>      
        <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('static/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/pointer.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>