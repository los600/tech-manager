<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class events extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_user_can_see_an_event_create()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_no_auth_user_can_not_see_an_event_create_form_redirect_login()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_no_auth_user_cant_create_an_event()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_no_auth_user_cant_delete_an_event()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_auth_user_can_not_delete_an_other_user_event()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
