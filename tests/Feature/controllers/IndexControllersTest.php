<?php

namespace Tests\Feature\controllers;

use App\Models\Events;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class IndexControllersTest extends TestCase
{   use RefreshDataBase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_see_index()
    {
        $user= User::factory()->create();
        $response = $this->get(route('index',$user));
        $response->assertStatus(200);
       
    }

    public function test_user_can_see_all_events(){
        User::factory()->create();
        $events = Events::factory(3)->create();

        $response = $this->get('/');

        $response->assertSee ($events [0]-> title);
    }
    

    

}
