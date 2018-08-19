<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'awards' => $faker->randomDigit(),
        'release_date' => $faker->date(),
        'length' => $faker->numberBetween(90, 280),
        'genre_id' => $faker->numberBetween(1, 9),
        'revenue' => $faker->numberBetween(1, 300)
    ];
});
