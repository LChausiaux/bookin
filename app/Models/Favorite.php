<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'story_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function story()
    {
        return $this->belongsTo('App\Models\Story');
    }
}