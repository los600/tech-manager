@extends('layouts.app')
    

@section('content')
    

<main>
  

  <div id="myCarousel" class="carousel slide pointer-event"  data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>



    <div class="carousel-inner">
      
      @forelse ($events as $event )
      <div class="carousel-item @if ($loop->index==0) active @endif">
            <img src="{{ asset('storage').'/'.$event->image }}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><>

          <div class="container">
            <div class="carousel-caption">
              <h1>{{ $event->title }}.</h1>
              <p>{{ $event->description }}</p>
            </div>
          </div>
      </div> 
    
        
      @empty
     @endforelse

          
        
      @forelse ($events as $event )
      <div class="carousel-item">
        <img src="{{ asset('storage').'/'.$event->image }}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>{{ $event->title }}.</h1>
            <p>{{ $event->description }}</p>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    
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
  @auth
   
   <div class="container-fluid h-100"> 
    <div class="row w-100 align-items-center">
      <div class="col text-center">
        <button class="btn btn-secondary regular-button"> My Events </button>
      </div>	
    </div>
  @endauth
  
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 justify-content-center align-self-center">
      @foreach ($events as $event )
      <div class="card m-5"  style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('storage').'/'.$event->image }}" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text">{{ $event->description }}</p>
            <p class="card-text">{{ $event->date }}</p>
            <p class="card-text">{{ $event->maxparticipants }}</p>
            <a href="#" class="btn btn-primary">Subscribe</a>
        </div>
      </div>
      @endforeach
</div>
    



 
@endsection