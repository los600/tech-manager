<?php

use App\Models\Event;
use App\Models\Events;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('events_Id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loves');
    }
}
    public function events(){
        return $this->HasMany(Event::class);
        return false;
    }
    public function isAuthor(Event $event){
        if ($instant->author->id == $this->id) return true;
        return false;
    }
    public function loves() {
        return $this->beLongsToMany(Event::class, 'loves');
    }