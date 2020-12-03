<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'blog_id' => factory(App\Blog::class),
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
