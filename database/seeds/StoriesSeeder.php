<?php

use App\Models\Story;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Story::class, 200)->create();

        // Get all the tags attaching up to 3 random tags to each user
        $tags = Tag::all();

        // Populate the pivot table
        Story::all()->each(function ($stories) use ($tags) {
            $stories->tags()->attach(
                $tags->random(rand(1, 6))->pluck('id')->toArray()
            );
        });
    }
}
