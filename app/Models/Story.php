<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'name',
        'cover',
        'rating',
        'rating_count',
        'view_count',
        'synopsis',
        'status',
        'type',
        'author_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
