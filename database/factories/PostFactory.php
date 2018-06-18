<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => str_random(10),
        'description' => str_random(10),
        'image_path' => str_random(10),
        'is_active' => random_int(0,1),
    ];
});
