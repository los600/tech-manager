@extends('layouts.app')

@section('content')
<form class="card-body" enctype="multipart/form-data" action='{{route ('events.create') }}' method="POST">
  @csrf
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
              <h2 class="card-header">{{ __('Create Event') }}</h2>
            <div class="formulario p-4">
              <div class="col-13">
                <div class="form-group ">
                  <label for="text" class="form-label">Title</label>
                  <input name= "title" type="text" class="form-control" id="" required>
                  <label  for="text" class="form-label">Date</label>                        
                  <input name= "date" type="text" class="form-control" id="" required>  
                  <label for="text" class="form-label">Max Participants</label>
                  <input name= "maxparticipants" type="text" class="form-control" id="" required>
                  <label for="text" class="form-label">Description</label>
                  <input name= "description" type="text" class="form-control" id="" required>
                  <div class="mt-3">
                  <input name="isImportant" type="checkbox" class="form-check-input" id="">
                  <label class="form-check-label" for="exampleCheck1">Important</label>
                  </div>
                   <br>         
                  <label for="exampleFormControlFile1">Image</label>
                  <br>
                  <div class="mt-3">
                  <input name= "image" type="file" class="form-control-file" id="" required>
                  </div>
                </div>
              </div>
            </div>  
                  <div class="p-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>  
      </div>
    </div>
</div>



@endsection
