@extends('layouts.app')

@section('content')

<form action='{{route ('events.update', $event->id) }}' method="POST">
  @method('PUT')
  @csrf
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h2 class="card-header">{{ __('Edit Event') }}</h2>
              <div class="formulario p-4">
                <div class="col-13">
                  <div class="form-group ">
                    <label for="text" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value= "{{ $event->title }} " > 
                    <label  for="text" class="form-label">Date</label>                                           
                    <input type="text" name="date" class="form-control" value= "{{ $event->date }}">
                    <label for="text" class="form-label">Max Participants</label>
                    <input type="text" name="maxparticipants" class="form-control" value= "{{ $event->maxparticipants }}">
                    <label for="text" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" value= "{{ $event->description }}">
                    <div class="mt-3">
                    <input name="isImportant" type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="exampleCheck1">Important</label>
                    </div>
                     <br>         
                    <label for="exampleFormControlFile1">Image</label>
                    <br>
                    <div class="mt-3">
                    <input type="text" name= "image" class="form-control" value="{{ $event->image }}">
                    </div>
                    <input type="hidden" name="id" value= "{{ $event->id }} " >
                  </div>
                </div>
              </div>  

                    <div class="p-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>  
        </div>
      </div>
  </div>

</form>
   


@endsection