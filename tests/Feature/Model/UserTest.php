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

        $user->eventSubscription()->attach($event);
        $user->eventSubscription()->attach($event2);
        //dd($user->eventsSubscriptions()->count());//
<<<<<<< HEAD
        $this->assertEquals(2, $user->eventSubscription()->count());
        $this->assertEquals(1, $event->userSubscription()->count());
        
    }

    public function test_user_can_know_when_is_subscribed_an_event(){
        $user = User::factory()->create();
        $event = Events::factory()->create();
        $user-> eventSubscription()->attach($event); //que el usuario pueda suscribirse a un evento

        $this-> assertTrue($user->isSubscribed($event)); //muestra que el usuario está suscrito al evento mediante valor true
=======
        $this->assertEquals(2, $user->eventsSubscriptions()->count());
        $this->assertEquals(1, $event->userSubscriptions()->count());
>>>>>>> c1ef9267b2d60775f98213fc87332185e513f466
        
    }
}
