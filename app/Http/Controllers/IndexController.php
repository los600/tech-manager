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
}
