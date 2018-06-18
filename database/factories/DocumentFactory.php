<?php

use Faker\Generator as Faker;
use App\Document;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'title' => str_random(10),
        'file_path' => str_random(10),
        'is_active' => random_int(0,1),
    ];
});
