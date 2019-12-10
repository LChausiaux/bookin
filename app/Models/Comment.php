<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'chapter_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function chapter()
    {
        return $this->belongsTo('App\Models\Chapter');
    }
}
