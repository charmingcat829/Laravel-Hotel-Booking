<?php

use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
    $check_in = $faker->dateTimeThisYear($max = 'now', $timezone = null);
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'hotel_id' => function () {
            return factory('App\Hotel')->create()->id;
        },
        'check_in' => $check_in,
        'check_out' => $faker->dateTimeInInterval($startDate = $check_in, $interval = '+ 20 days'),
        'card_number' => $faker->creditCardNumber(),
        'card_holder_name' => $faker->name,
        'card_expiration' => $faker->creditCardExpirationDateString,
        'smoking' => $faker->boolean(90),
        'beds' => $faker->numberBetween($min = 1, $max = 5)
    ];
});