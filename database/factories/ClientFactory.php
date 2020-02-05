<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Auth;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'client_name' => $faker->name,
        'address' => $faker->address,
        'father_name' => $faker->name,
        'mother_name' => $faker->name,
        'joined_data' => $faker->date('Y-m-d', max(10, 12)),
        'contact_number' => $faker->numberBetween(8, 10),
        'is_vip' => $faker->numberBetween(0, 1),
        'weight' => $faker->numberBetween(30, 70),
        'temperature' => $faker->numberBetween(80, 99),
        'blood_group' => $faker->randomElement(['a', 'e', 'i', 'o']),
        'blood_pressure' => $faker->numberBetween(120, 180),
        //
    ];
});
