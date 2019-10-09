<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collation;
use Faker\Generator as Faker;

$factory->define(Collation::class, function (Faker $faker) {
    return [
        'description' => $faker->word,
        
    ];
});
