<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EquipoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_muestra_listado_equipos(): void
    {
        $response = $this->get('/equipos');
        $response->assertSee('Equipos');
        $response->assertStatus(200);
    }
}
