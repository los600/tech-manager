<?php

namespace Tests\Feature\controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Events;

class EventsControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_susbcribe()
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();

        $this->actingAs($user)->get(route('event.subscribe', $event->id));

        $this->assertTrue($user->isSubscribed($event));
        

        
    }
    // test user suscribe  can unsuscribe

    
}
