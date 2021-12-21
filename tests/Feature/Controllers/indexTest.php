<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class index extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_a_index_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_can_see_an_all_users_events_list()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_can_see_an_authors_name_in_events_list()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
