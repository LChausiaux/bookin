<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Character;
use App\Models\Story;
use Faker\Generator as Faker;

$factory->define(Character::class, function (Faker $faker) {
    $stories = Story::pluck('id')->toArray();
    
    return [
        'illustration' => $faker->text(10),
        'name' => $faker->text(10),
        'genre' => $faker->text(10),
        'description' => $faker->text(250),
        'like' => $faker->text(50),
        'hate' => $faker->text(50),
        'content' => $faker->text(250),
        
        'story_id' => $faker->randomElement($stories),
    ];
});
