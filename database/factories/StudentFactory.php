<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function(Faker $faker) {
    return [
        'full_name' => $faker->name,
        'index' => $faker->unique()->numberBetween(100, 900),
        'school_id' => function() {
            return create(\App\Models\School::class)->id;
        }
    ];
});
