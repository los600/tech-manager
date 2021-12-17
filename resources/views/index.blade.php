<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.1/examples/carousel/ -->
<html lang="en" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TECH EVENT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('CarouselTemplate/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('CarouselTemplate/carousel.css') }}" rel="stylesheet">
  <meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;Bootstrap&quot;:-1}"><script type="text/javascript" src="chrome-extension://fhhdlnnepfjhlhilgmeepgkhjmhhhjkh/js/detector.js"></script></head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Carousel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    @foreach ($events as $event )
      
       
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $event->title }} </h2>
        <p class="lead">Event date: {{ $event->date }} </p>
        <p class="lead">Plazas: {{ $event->maxparticipants }} </p>
        <p class="lead">{{ $event->description }}</p>
      </div>
      <div class="col-md-5">
        <img src="{{ $event->image }}" class="d-block w-50" alt="...">
        
      </div>
    </div>
    
    <hr class="featurette-divider">
    
    @endforeach
    


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Back to top</a></p>
    <p>© 2017–2021 Company, Inc. · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Terms</a></p>
  </footer>
</main>


    <script src="{{ asset('CarouselTemplate/bootstrap.bundle.min.js.descarga') }}" ></script>

      
  

<div></div></body></html>