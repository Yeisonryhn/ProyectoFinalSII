<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Database;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Database::class, function (Faker $faker) {
    return [
        'name' => 'database '.$faker->word,
        'd_b_engine_id' => $faker->numberBetween(1,7),
        'project_id' => $faker->unique()->numberBetween(1,10),
        'collation_id' =>$faker->numberBetween(1,5),
        'creation_date' => Carbon::now(),
    ];
});
