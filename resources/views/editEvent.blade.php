@extends('layouts.app')

@section('content')


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

      <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" class="form-control-file" id="">
      </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

@endsection