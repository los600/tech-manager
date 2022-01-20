<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;


class IndexController extends Controller
{
    public function index(){
        $events = Events::orderBy('date', 'ASC')->get();
        return view('index',['events'=>$events]);
    }

    public function indexAdmin(){
        $events = Events::orderBy('date', 'ASC')->get();
        return view('indexAdmin',['data'=>$events]);// pasando los datos a la vista, y pediendo los datos que nos muestre.
    }

    public function showEvents(){
        $events = Events::orderBy('date', 'ASC')->get();
        return view('myEvents',['events'=>$events]);// pasando los datos a la vista, y pediendo los datos que nos muestre.
    }

}
