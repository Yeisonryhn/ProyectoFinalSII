<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Provider\Barcode;
use Faker\Provider\es_VE\Person;
use Faker\Provider\Base;

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'identity_card_number' => $faker->unique()->ean8,
    ];
});
