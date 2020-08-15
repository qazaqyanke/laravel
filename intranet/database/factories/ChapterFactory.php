<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
    ];
});
