@extends('layouts.app')

@section('content')
<form class="card-body" enctype="multipart/form-data" action='{{route ('events.create') }}' method="POST">
  @csrf
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
              <h2 class="card-header">{{ __('Create Event') }}</h2>
            <div class="formulario p-4">
              <div class="col-13">
                <div class="form-group ">
                  <label for="text" class="form-label">Title</label>
                  <input name= "title" type="text" class="form-control" id="">
                  <label  for="text" class="form-label">Date</label>
                  <input name= "date" type="text" class="form-control" id="">  
                  <label for="text" class="form-label">Max Participants</label>
                  <input name= "maxparticipants" type="text" class="form-control" id="">
                  <label for="text" class="form-label">Description</label>
                  <input name= "description" type="text" class="form-control" id="">
                  
              
                  <label for="exampleFormControlFile1">Image</label>
                  <input name= "image" type="file" class="form-control-file" id="">
                  
                  <input name="isImportant" type="checkbox" class="form-check-input" id="">
                  <label class="form-check-label" for="exampleCheck1">Important</label>
                </div>
              </div>
            </div>  
            
          <button type="submit" class="btn btn-primary">Create</button>
      </div>
  </div>
</div>

@endsection
