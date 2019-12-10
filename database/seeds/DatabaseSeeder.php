<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(StoriesSeeder::class);
        $this->call(ChaptersSeeder::class);
        $this->call(CharactersSeeder::class);
        $this->call(FavoritesSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(StoryTagsSeeder::class);
    }
}
