<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'title',
        'content',
        'position',
        'story_id',
    ];

    public function story()
    {
        return $this->belongsTo(Story::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function contentItems()
    {
        return $this->hasMany(ContentItem::class);
    }
}
