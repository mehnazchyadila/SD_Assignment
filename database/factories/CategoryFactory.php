<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\str;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => str::random(30),
        'status' => true,
        'sort-order' => $faker->numberBetween($min = 1 , $max = 50)
    ];
});

