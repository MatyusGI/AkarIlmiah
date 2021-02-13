<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AkarIlmiah') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="riset, kedokteran, statistik, bioinformmatika" name="keywords">
    <meta content="Kami melayani hal-hal yang berkaitan dengan manajemen riset" name="description">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/apple-touch-icon-120x120.png') }}" >
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/favicon-32x32.png') }}" sizes="32x32" >

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('css/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{ asset('css/nivo-slider-theme.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/quiz_style.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

    <livewire:styles/>
    <livewire:scripts/>

</head>
<body>
    <div id="app">
        
        <livewire:navbar/>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('lib/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('contactform/contactform.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
</body>
</html>
