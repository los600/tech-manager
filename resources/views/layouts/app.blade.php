<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Tech Event' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="{{ asset('CarouselTemplate/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('CarouselTemplate/carousel.css') }}" rel="stylesheet">
    <meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;Bootstrap&quot;:-1}"><script type="text/javascript" src="chrome-extension://fhhdlnnepfjhlhilgmeepgkhjmhhhjkh/js/detector.js"></script></head>
    <style>


        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-family: 'PT Sans', sans-serif;
            font-size: 3.5rem;
          }

        }

        .card-img-top {
          width: 100%;
          height: 15vw;
          object-fit: cover;
        }

        .carousel-item {
          height: 80vh;
          min-height: 300px;
          background-repeat: no-repeat;
          background-size: cover;
        }

      </style>
</head>
<body>
    
        @component('components.header')
            
        @endcomponent
       
        
        @yield('content')
      

        @component('components.footer')
            
        @endcomponent

       
   
<script src="{{ asset('CarouselTemplate/bootstrap.bundle.min.js.descarga') }}" ></script>
</body>
</html>
