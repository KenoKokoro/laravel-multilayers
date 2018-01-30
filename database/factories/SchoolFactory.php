<?php

use Faker\Generator as Faker;

$factory->define(App\Models\School::class, function(Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'address' => $faker->address
    ];
});
