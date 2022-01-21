<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_redirect()
    {
        $admin= User::factory()->create(['isAdmin'=> true]);
        $response = $this->actingAs($admin)->get(route('events.create'));
        $response -> assertViewIs('admin');
    }
}
