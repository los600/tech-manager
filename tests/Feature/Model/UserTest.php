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
    public function test_user_can_suscribe_can_event()
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();

        $user->eventsSubscriptions()->attach($event);
        dd($user->eventsSubscriptions());
        $this->assertEquals(1, $event->Subscribe()->count());
    }
}
