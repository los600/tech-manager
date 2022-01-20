<?php

namespace Tests\Feature\Model;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Events;
use App\Models\User;

class EventTest extends TestCase
{   use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_event_is_full()
    
    {
        $event = Events::factory()->create([
            'maxparticipants'=> 1
        ]);
        $user = User::factory()->create();
        $user-> eventSubscription()->attach($event);

        $response = $event->isFull();
        $this->assertTrue($response);

       

        
    }
}
