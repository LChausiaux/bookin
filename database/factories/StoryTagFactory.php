<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Story;
use App\Models\StoryTag;
use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(StoryTag::class, function(Faker $faker)
{
    $stories = Story::pluck('id')->toArray();
    $tags = Tag::pluck('id')->toArray();
    
    return [
        'story_id' => $faker->randomElement($stories),
        'tag_id' => $faker->randomElement($tags),
    ];
});
