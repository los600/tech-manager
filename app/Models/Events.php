<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'date',
        'maxparticipants',
        'description',
        'image',
    ];
}

//     public function createDb(Request $request){

//              $this->validate($request, [
//             'name' => 'required|min:5',
//             'author' => 'required|min:8',
//             'isbn' => 'required'
//              ]);

//              Events::create($request->all());
//             return redirect('/EventsFactory');

    
// }};
