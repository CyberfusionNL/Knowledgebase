<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => 'Category name',
        'type' => 'learn',
    ];
});
