<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_redirect()
    {
        $admin=
        $response = $this
        ->actingAs($admin);
        ->get(routes('indexAdmin'));

        $response->assertStatus(200);
    }
}
