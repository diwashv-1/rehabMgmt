<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Package;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Auth;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'package_name' => $faker->name,
        'package_amount' => $faker->numberBetween(4, 6),
        'package_time' => $faker->numberBetween(6, 24),
        'user_id' => Auth::user()->id

        //
    ];
});
