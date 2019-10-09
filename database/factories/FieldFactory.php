<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Field;
use Faker\Generator as Faker;

$factory->define(Field::class, function (Faker $faker) {
    return [
        'name'=>'Campo '.$faker->word,
        'length' => $faker->numberBetween(2,32),
        'default' => 'predeterminado '.$faker->word,
        'null'=> 'NN',
        'table_id' => $faker->numberBetween(1,20),
        'datatype_id' =>$faker->numberBetween(1,6)
       ];
});
