<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->title()
        ,'content'  => $faker->paragraph()
        , 'source_website' => $faker->domainName()
        , 'source_url' => $faker->url()
        , 'published_date' => $faker->date()
        , 'image_url' => ""
        , 'category_id' => $faker->numberBetween(1, 4)
    ];
});
