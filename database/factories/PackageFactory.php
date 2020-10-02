<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Packages::class, function (Faker $faker) {
    return [
        'customer_name' => $faker->name
    ];
});