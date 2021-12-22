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


 

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  

    <!-- START THE FEATURETTES -->
    
      <hr class="featurette-divider">
      <a href="/admin" type="button" class="btn btn-primary">Crear event</a>
   
    <hr class="featurette-divider">
   
    @foreach ($data as $event )
      
       
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $event->title }} </h2>
        <p class="lead">Event date: {{ $event->date }} </p>
        <p class="lead">Plazas: {{ $event->maxparticipants }} </p>
        <p class="lead">{{ $event->description }}</p>

        <form action="/indexAdmin/ {{$event->id}}" method="POST">
          @method('DELETE')
          @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <form action='{{route('events.edit', $event->id)}}' method="GET">
          <button type="submit" class="btn btn-success">Edit</button>
        </form>
      </div>
      <div class="col-md-5">
        <img src="{{ $event->image }}" class="d-block w-50" alt="...">
        <div class="btn-group">
         
          
        </div>
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