<?php

namespace Tests\Feature\Model;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

use App\Models\Events;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_suscribe_an_event()
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();
        $event2 = Events::factory()->create();

        $user->eventsSubscriptions()->attach($event);
        $user->eventsSubscriptions()->attach($event2);
        //dd($user->eventsSubscriptions()->count());//
        $this->assertEquals(2, $user->eventsSubscriptions()->count());
        $this->assertEquals(2, $event->userSubscriptions()->count());
        
    }
}
