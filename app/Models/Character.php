<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'illustration',
        'name',
        'genre',
        'description',
        'like',
        'hate',
        'content',
        'story_id'
    ];
    
    public function story()
    {
        return $this->belongsTo('App\Models\Story');
    }
}
