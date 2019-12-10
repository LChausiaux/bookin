<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Story;
use App\Models\Author;
use Faker\Generator as Faker;

$factory->define(Story::class, function(Faker $faker)
{
    $authors = Author::pluck('id')->toArray();
    
    return [
        'name' => $faker->text(50),
        'synopsis' => $faker->text(250),
        'status' => $faker->randomElement(['pending', 'finished']),
        'type' => $faker->randomElement(['book', 'novel', 'poetry']),
        
        'author_id' => $faker->randomElement($authors),
    ];
});
