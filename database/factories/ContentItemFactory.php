<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chapter;
use App\Models\ContentItem;
use Faker\Generator as Faker;

$factory->define(ContentItem::class, function (Faker $faker)
{
    $chapters = Chapter::pluck('id')->toArray();

    return [
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'position' => $faker->numberBetween(1, 5),

        'chapter_id' => $faker->randomElement($chapters)
    ];
});
