@extends('layouts.app')

@section('content')
    {{-- <h1>Holaa</h1> --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 justify-content-center align-self-center">  
        @foreach ($events as $event)
        <div class="card m-5"  style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage').'/'.$event->image }}" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text">{{ $event->description }}</p>
                <p class="card-text">{{ $event->date }}</p>
                <p class="card-text">{{ $event->maxparticipants }}</p>
                @auth
                    @php
                    if (Auth::user()->isSubscribed($event)) {
                        $btnSus = "Inscrito!"; 
                        $btColor="btn btn-lg btn-success";
                    }
                    if (!Auth::user()->isSubscribed($event)) {
                        $btnSus = "Suscribirse"; 
                        $btColor="btn btn-lg btn-primary";
                    }//minuto 42.58 (laravel many to many)
                    
                    @endphp
                        
                <a href="{{route('event.subscribe', $event->id)}}"><button type="button" class="{{$btColor}}">{{$btnSus}}</button></a>
            @endauth  
            </div>
        </div>
        @endforeach
    </div>
@endsection