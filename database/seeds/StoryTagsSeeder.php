<?php

use App\Models\StoryTag;
use Illuminate\Database\Seeder;

class StoryTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StoryTag::class, 400)->create();
    }
}
