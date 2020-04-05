<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Muzeum;

$factory->define(App\Muzeum::class, function (Faker $faker) {
    return [
       'category_id' => $faker->numberBetween(1,4), //1~4ランダム
       'name' => $faker->lastName . '美術館',
       'address' => '岡山県' . $faker->streetAddress,
       'tel' => $faker->phoneNumber,
       'image' => $faker->imageUrl(),
    ];
});
