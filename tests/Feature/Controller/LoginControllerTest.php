<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_redirect()
    {
        $admin= Auth::factory()->create();
        $this->actingAs($admin)->get(route('events.create'));

        $this->indexAdmin(route('events.create'));
    }
}
