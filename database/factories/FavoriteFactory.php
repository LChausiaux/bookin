<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Favorite;
use App\Models\Story;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Favorite::class, function(Faker $faker)
{
    $users = User::pluck('id')->toArray();
    $stories = Story::pluck('id')->toArray();
    
    return [
        'user_id' => $faker->randomElement($users),
        'story_id' => $faker->randomElement($stories),
    ];
});
