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
    public function test_count_if_is_full_of_users()
    
    {
        $event = Events::factory()->create();
        $event2 = Events::factory()->create();
        $user = User::factory()->create();
        $user2 = User::factory()->create();

        $user-> eventSubscription()->attach($event);
        $user-> eventSubscription()->attach($event);

        //$response = $event->isFull();
        //$this->assertTrue($response);
        $this->assertDatabaseCount('events_user', 1);
      

  
    }
    public function test_print_users_table_events_user()
    {
        $event = Events::factory()->create([
            'maxParticipants'=> 1
        ]);
        $user = User::factory()->create();

        $user-> eventSubscription()->attach($event);

        $response = $event->isFull();
       
       

        $this->assertEquals(true,$response);
    }
}
