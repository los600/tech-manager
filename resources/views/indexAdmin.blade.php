@extends('layouts.app')

  
@section('content')
 
    
     <div class="card-body">
      <a href="/admin" type="button" class="btn btn-primary">Create event</a>
    </div>
 
   
    @foreach ($data as $event )
    
       
    <div class="container">
      <div class="card-d">
        <h2 class="featurette-heading">{{ $event->title }} </h2>
        <div class="col-md-5">
          <img src="{{ $event->image }}" class="d-block w-50" alt="...">
      </div>
            <div clas="card-d-flex justify-content-center">
              <p class="lead">Event date: {{ $event->date }} </p>
              <p class="lead">Plazas: {{ $event->maxparticipants }} </p>
              <p class="lead">{{ $event->description }}</p>
            </div>
              <div class="container-btn">
                <form action="/indexAdmin/ {{$event->id}}" method="POST">
                  @method('DELETE')
                  @csrf
                    <div class="container-btn">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
                <br>
                <form action='{{route('events.edit', $event->id)}}' method="GET">
                  <button type="submit" class="btn btn-success">Edit</button>
                </form>
              </div>
    
      </div>
    </div>
  
  <hr class="featurette-divider">
  
    
    @endforeach
    




@endsection


      
  

