<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginControllerTest extends TestCase
{   
    use RefreshDatabase;
    /**
     *
     * @return void
     */
    public function test_admin_show_view_to_create_events()

    {
        $admin= User::factory()->create(['isAdmin'=> true]);
        $response = $this->actingAs($admin)->get(route('events.create'));
        $response->assertViewIs('admin');
    }
}
