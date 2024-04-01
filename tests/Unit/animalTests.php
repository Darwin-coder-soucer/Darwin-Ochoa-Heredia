<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Animal;

class AnimalTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAnimalCreation()
    {
        // Crea un nuevo animal
        $animal = Animal::create([
            'nombre' => 'León',
            'especie_id' => 1,
            'recinto_id' => 1
        ]);

        // Verifica que el animal haya sido creado exitosamente
        $this->assertInstanceOf(Animal::class, $animal);
        $this->assertEquals('León', $animal->nombre);
        $this->assertEquals(1, $animal->especie_id);
        $this->assertEquals(1, $animal->recinto_id);
    }
}
