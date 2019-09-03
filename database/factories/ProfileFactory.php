<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Profile::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'gender' => $faker->randomElement(['man', 'woman']),
            'hobby' => $faker->word,
            'introduction' => $faker->sentence,
    ];
});
