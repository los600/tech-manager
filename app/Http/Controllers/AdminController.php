<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class AdminController extends Controller{

    public function admin(){
        $events = Events::all(); // trayedo de la base de datos todos los eventos
        return redirect(route('indexAdmin'));// pasando los datos a la vista, y pediendo los datos que nos muestre.
    }

}