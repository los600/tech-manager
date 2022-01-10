<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Http\Controllers\IndexController;
use App\Models\Event;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(route('admin'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->title);verificar si se sube
        // $ events = New Event();
        /* Event::create */
        
        

        $data =[
            'title'=> $request->title,
            'image'=> $request ->image,
            'date'=> $request ->date,
            'maxparticipants'=> $request ->maxparticipants,
            'description'=> $request ->description,
            'isImportant'=> $request ->isImportant ? true : false,
        ];
        Events::create($data);
        return redirect(route('indexAdmin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    $event = Events::FindOrFail($id);
    return view ('editEvent', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventsRequest  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // $eventToDelete = Events::findOrFail($id);
        // $eventToDelete->delete();
        Events::destroy ($id);
        return back();
    }
    
}
