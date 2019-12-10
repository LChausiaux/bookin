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
        return $this->belongsTo('App\Models\Story');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
