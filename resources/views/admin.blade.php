@extends('layouts.app')

@section('content')
<h1>ADMINISTRATOR</h1>
<form action='{{route ('events.create') }}' method="POST">
  @csrf

    <div class="mb-3">
      <label for="text" class="form-label">Title</label>
        <input name= "title" type="text" class="form-control" id="">

        <div class="mb-3">
            <label  for="text" class="form-label">Date</label>
            <input name= "date" type="text" class="form-control" id="">
        </div>
    
        <div class="mb-3">
            <label for="text" class="form-label">Max Participants</label>
            <input name= "maxparticipants" type="text" class="form-control" id="">
        </div>

      <div class="mb-3">
        <label for="text" class="form-label">Description</label>
        <input name= "description" type="text" class="form-control" id="">
      </div>  

      <div class="mb-3 form-check">
        <input name="isImportant" type="checkbox" class="form-check-input" id="">
        <label class="form-check-label" for="exampleCheck1">Important</label>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input name= "image" type="file" class="form-control-file" id="">
      </div>
    
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>
@endsection
