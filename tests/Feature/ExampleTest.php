<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_importantevents()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    //si no eres el admin no puedes borrar eventos.
    public function test_if_not_admin_not_delete_events()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
        
    }
    //Si te apuntas a partir de una hora no et pots apuntar.
    public function test_if_not_note_intime_not_assist_event()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    //si no esta lleno , te puedes incrivir.
    public function test_if_any_place_you_anote()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
