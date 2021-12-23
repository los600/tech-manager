@extends('layouts.app')

@section('content')
<h1 class="card-header">ADMINISTRATOR</h1>
<form class="card-body" action='{{route ('events.create') }}' method="POST">
  @csrf
  <div class="card-d-flex justify-content-center">
        <div class="card-body">
          <label for="text" class="form-label">Title</label>
          <input name= "title" type="text" class="form-control" id="">
        </div>
        <div class="card-body">
            <label  for="text" class="form-label">Date</label>
            <input name= "date" type="text" class="form-control" id="">
        </div>
    
        <div class="card-body">
            <label for="text" class="form-label">Max Participants</label>
            <input name= "maxparticipants" type="text" class="form-control" id="">
        </div>

      <div class="card-body">
        <label for="text" class="form-label">Description</label>
        <input name= "description" type="text" class="form-control" id="">
      </div>  

      <div class="card-body-form-check">
        <input type="checkbox" class="card-form-check-input" id="">
        <label name="isImportant" class="form-check-label" for="exampleCheck1">Important</label>
      </div>
      <br>

      <div class="card-body-form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input name= "image" type="file" class="form-control-file" id="">
      </div>
        <br>
       
  </div>  
  <button type="submit" class="card-body-btn btn-info">Create</button>
</form>
@endsection
