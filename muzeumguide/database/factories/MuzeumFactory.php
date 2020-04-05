<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Muzeum;

$factory->define(App\Muzeum::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1,4), //1~4ランダム
        'name' => $faker->name,
        'address' => $faker->adress,
        'tel' => $faker->phoneNumber,
        'image' => $faker->imageUrl(),
    ];
});
