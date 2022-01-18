@extends('layouts.app')
    

@section('content')
    

<main>
  

  <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>



    <div class="carousel-inner" role="listbox">  
      <div class="carousel-item active">
        <img src="{{ asset('storage').'/'.$events[0]->image  }}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><>
        <div class="container">
          <div class="carousel-caption">
            <h1>{{$events[0]->title}}</h1>
            <p>{{$events[0]->description}}</p>
    {{--     @auth
            @php
              if (Auth::user()->isSubscribed($event)){$btnSus= 'Inscrito!';}
              if (!Auth::user()->isSubscribed($event)){$btnSus= 'Suscribirse';}
            @endphp 
            <p><button class="btn btn-lg btn-primary" href="/">{{$btnSus}}</button></p>
        @endauth      --}}      
           
            
          </div>
        </div>
      </div> 
    
          
        
      @for ($i= 0; $i <= 1; $i++)
      <div class="carousel-item">
        <img src="{{ asset('storage').'/'.$events[$i]->image }}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>{{ $events[$i]->title }}.</h1>
            <p>{{ $events[$i]->description }}</p>
      {{--     @auth
          @php
          if (Auth::user()->isSubscribed($event)){$btnSus= 'Inscrito!';}
          if (!Auth::user()->isSubscribed($event)){$btnSus= 'Suscribirse';}
        @endphp
                   
           <p><button class="btn btn-lg btn-primary" href="/">{{$btnSus}}</button></p> 
          
          @endauth   --}}
                   
            
          </div>
        </div>
      </div>
     
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
              <p class="lead">{{$event ->image}}</p>
            </div>
            @auth
            @php
              if (Auth::user()->isSubscribed($event)){$btnSus = "Inscrito!";}
              if (!Auth::user()->isSubscribed($event)){$btnSus = "Suscribirse";}//minuto 42.58 (laravel many to many)
              
            @endphp
                    
            <p><button class="btn btn-lg btn-primary" href="/">{{$btnSus}}</button></p>
           @endauth  
    
      </div>
    </div>
  
  <hr class="featurette-divider">
    @endforeach
    



 
@endsection

   

      
  

