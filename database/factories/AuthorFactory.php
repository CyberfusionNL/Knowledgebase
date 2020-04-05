<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Author;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
    ];
});
