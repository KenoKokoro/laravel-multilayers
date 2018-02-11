<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Friend::class, function(Faker $faker) {
    return [
        'email' => $faker->email,
        'student_id' => function() {
            return create(\App\Models\Student::class)->id;
        }
    ];
});
