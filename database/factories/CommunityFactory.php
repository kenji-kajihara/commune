<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Community::class, function (Faker $faker) {
    return [
            'user_id' => $faker->numberBetween(1,10),
            'name' => $faker->word,
            'description' => $faker->sentence,
    ];
});
