<?php

namespace Tests\Feature\Htttp\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PacientesControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_pacientes_index_returns_ok()
    {
        $response = $this->get('/pacientes');

        $response->assertStatus(200);
        $response = $this->get('/pacientes.index');

    }

    public function test_pacientes_create_returns_ok()
    {
        $response = $this->get('/pacientes/create');
        
        $response->assertStatus(200);
        $response->assertViewIs('pacientes.create');  // Verifica que se cargue la vista correcta
    }

}
