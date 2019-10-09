<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Provider\Base;
use Faker\Provider\Lorem;
use Faker\Provider\Internet;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name'=> 'Proyecto '.$faker->word,
        'url' => $faker->url,
        'client_id' => $faker->numberBetween(1, 15),
    ];
});
