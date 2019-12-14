<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Story;
use App\Models\Chapter;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    $stories = Story::pluck('id')->toArray();

    return [
        'title' => $faker->text(50),
        'position' => $faker->numberBetween(1, 5),

        'story_id' => $faker->randomElement($stories),
    ];
});
