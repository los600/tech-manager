<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Http\Controllers\IndexController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Auth;

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
         //dd($request->image);
        
        
       
       /*   $request->validate([
            'image' => 'required|image|max:2048'
        ]); */
        
      
        $data =[
            'title'=> $request->title,
            'image'=> $request ->image,
            'date'=> $request ->date,
            'maxparticipants'=> $request ->maxparticipants,
            'description'=> $request ->description,
            'isImportant'=> $request ->isImportant ? true : false,
        ];
        
        if ($request->hasFile('image')){
            $data['image']=
            $request->file('image')->store('img','public');
        };
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
    public function update(UpdateEventsRequest $request, $id)
    {
      $eventToUpDate = Events::FindOrFail($id); 
      $eventToUpDate ->title= $request->input ('title');
      $eventToUpDate ->date= $request->input ('date'); 
      $eventToUpDate ->maxparticipants= $request->input ('maxparticipats');
      $eventToUpDate ->description= $request->input ('description');
      $eventToUpDate -> save();
      return back();
    
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

    public function calendar($id)
    {
        $event = User::find($id);

        dd($event->created_at->addDays());

        return view ('event.create');
    }
    public function togglesusbcribe($id){

      if(!Auth::user()->isSubscribed($id)){
        Auth::user()-> eventSubscription()->attach($id);
        return back();

      }
      Auth::user()-> eventSubscription()->detach($id);
      return back();
    }

    public function showEvents($id){
        
    }
    
}
