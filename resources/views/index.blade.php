@extends('layouts.app')
    

@section('content')
    

<main>
  

  <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>



    <div class="carousel-inner">
      @for ($i = 0; $i < 4; $i++)
      @if ($i== 0)
      <div class="carousel-item active">
        <svg src="" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Evento</h1>
            <p>Descripción de evento</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Subscribe</a></p>
          </div>
        </div>
      </div> 
      @endif
          
        
      @foreach ($events as $event )
      <div class="carousel-item">
        <img src="{{ $event->image }} class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>{{ $event->title }}.</h1>
            <p>{{ $event->description }}</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Subscribe</a></p>
          </div>
        </div>
      </div>
     
      @endforeach
      @endfor
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



    <hr class="featurette-divider">
    @foreach ($events as $event )
      
    <div class="container">
      <div class="card-d">
        <h2 class="featurette-heading">{{ $event->title }} </h2>
        <div class="col-md-5">
          <img src="{{ asset('storage').'/'.$event->image }}" class="d-block w-50" alt="...">
      </div>
            <div clas="card-d-flex justify-content-center">
              <p class="lead">Event date: {{ $event->date }} </p>
              <p class="lead">Plazas: {{ $event->maxparticipants }} </p>
              <p class="lead">{{ $event->description }}</p>
            </div>
              <div class="container-btn">
                <a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Subscribe</a>
              </div>
    
      </div>
    </div>
  
  <hr class="featurette-divider">
    @endforeach
    



 
@endsection

   

      
  

