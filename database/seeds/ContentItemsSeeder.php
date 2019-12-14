<?php

use App\Models\ContentItem;
use Illuminate\Database\Seeder;

class ContentItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ContentItem::class, 5000)->create();
    }
}
