<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Events extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'date',
        'maxParticipants',
        'description',
        'isImportant',
        'image',
    ];

    public function userSubscription() {
        return $this->BelongsToMany(User::class);
    }
    public function isFull(){
        $userCount= $this-> userSubscription()->count();
        if ($this->maxParticipants == $userCount){
            return true;
        }
        return false;
        
    
    }
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
    