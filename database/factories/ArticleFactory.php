<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->words(2),
        'image_path'=>'uploads/default.jpg',
        'content'=>$faker->text(200)

    ];
});
