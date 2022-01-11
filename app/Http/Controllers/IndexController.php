<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;


class IndexController extends Controller
{
    public function index(){
        $events = Events::all();
        return view('index',['events'=>$events]);
    }

    public function indexAdmin(){
        $events = Events::all(); // trayedo de la base de datos todos los eventos
        return view('indexAdmin',['data'=>$events]);// pasando los datos a la vista, y pediendo los datos que nos muestre.
    }

}
