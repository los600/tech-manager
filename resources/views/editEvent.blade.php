@extends('layouts.app')

@section('content')

<form action='{{route ('events.update', $event->id) }}' method="POST">
  @method('PUT')
  @csrf

<form action='{{ route('events.update', $event->id) }}' method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
      <label for="text" class="form-label">Title</label>
        <input type="text" class="form-control" id="" value="{{ $event->title}}">

        <div class="mb-3">
            <label for="text" class="form-label">Date</label>
            <input type="text" class="form-control" id="" value="{{ $event->date}}">
        </div>
    
        <div class="mb-3">
            <label for="text" class="form-label">Max Participants</label>
            <input type="text" class="form-control" id="" value="{{ $event->maxparticipants}}">
        </div>

      <div class="mb-3">
        <label for="text" class="form-label">Description</label>
        <input type="text" class="form-control" id="" value="{{ $event->description}}">
      </div>  

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="">
        <label class="form-check-label" for="exampleCheck1">Important</label>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" name= "image" class="form-control" value="{{ $event->image }}">
      </div>

      <input type="hidden" name="id" value= "{{ $event->id }} " >
    
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>

@endsection