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
        return $this->belongsTo('App\Models\Author');
    }
    
    public function chapters()
    {
        return $this->hasMany('App\Models\Chapter');
    }
    
    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }
    
    public function characters()
    {
        return $this->hasMany('App\Models\Characters');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
