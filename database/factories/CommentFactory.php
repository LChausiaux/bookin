<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chapter;
use App\Models\Comment;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function(Faker $faker)
{
    $chapters = Chapter::pluck('id')->toArray();
    $users = User::pluck('id')->toArray();
    
    return [
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        
        'chapter_id' => $faker->randomElement($chapters),
        'user_id' => $faker->randomElement($users),
    ];
});
