<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Auth\User;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_redirect()
    {
        $admin= User::factory()->create();
        $response = $this
        ->actingAs($admin)
        ->get(route('indexAdmin'));

        $response->assertRedirect(route('indexAdmin'));
    }
}
