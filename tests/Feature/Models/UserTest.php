<?php

namespace Tests\Feature\Models;

use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_user_can_love_an_event()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();

        $user->loves()->attach($event);

        $this ->assertEquals(1, $user->loves()->count());
        
    public function isAuthor(Event $event){
        if ($event->author->id == $this->id) return true;
        return false;
    }
    public function love(){
        return $this->belongsToMany(Event::class, 'loves');
    }

}

