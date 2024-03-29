<?php

/** @var Factory $factory */

use App\Models\Author;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Author::class, function(Faker $faker)
{
    return [
        'name' => $faker->text(50),
    ];
});
