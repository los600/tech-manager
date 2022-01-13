@extends('layouts.app')

  
@section('content')
 
    
     
      <a href="/admin" type="button" class="btn btn-primary">Create event</a>
   
 
   
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
    




@endsection


      
  

