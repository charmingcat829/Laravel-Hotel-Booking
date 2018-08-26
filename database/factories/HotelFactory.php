<?php

use Faker\Generator as Faker;
use \Faker\Provider\en_US\Address as Address;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'name' => preg_replace('/[^A-Za-z0-9\-]/', '', $faker->company), // Remove special chars
        'address' => $faker->unique()->streetAddress,
        'city' => $faker->city,
        'state' => Address::state(),
        'zip' => Address::postcode(),
        'price' => $faker->numberBetween(50, 400)
    ];
});