<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// database/factories/AnimalFactory.php

$factory->define(App\Animal::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'especie_id' => factory(App\Especie::class),
        'recinto_id' => factory(App\Recinto::class),
    ];
});
