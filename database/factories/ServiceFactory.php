<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'details' => $faker->text,
        'price' => $faker->randomFloat()
    ];
});