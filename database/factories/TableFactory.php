<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Table;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Table::class, function (Faker $faker) {
    return [
        'name' =>'tabla '.$faker->word,
        'database_id'=>$faker->numberBetween(1,7),
        'creation_date'=>Carbon::now(),
    ];
});
