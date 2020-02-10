<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reactivo;
use Faker\Generator as Faker;

$factory->define(Reactivo::class, function (Faker $faker) {

    return [
        'pregunta' => $faker->word,
        'grado_inicial' => $faker->randomDigitNotNull,
        'grado_final' => $faker->randomDigitNotNull,
        'tipo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
