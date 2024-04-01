<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Animal;

class AnimalControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get('/animales');

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $response = $this->post('/animales', [
            'nombre' => 'Ejemplo',
            'especie_id' => 1,
            'recinto_id' => 1
        ]);

        $response->assertRedirect('/animales');
        $this->assertDatabaseHas('animales', ['nombre' => 'Ejemplo']);
    }

    
}
