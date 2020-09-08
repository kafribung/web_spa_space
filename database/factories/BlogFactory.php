<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'      => $faker->sentence(),
        'description' => $faker->paragraph(10),
        'slug'       => $faker->sentence(),
        'user_id'    => 3
    ];
});
