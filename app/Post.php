<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [  
        'name',
        'surname',
        'comments',
        'likes',
        'Place',
    ];

    public function PostGenre() {
        return $this->belongsTo(PostGenre::class);
    }
}
