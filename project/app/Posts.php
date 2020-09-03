<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['name', 'image', 'content', 'price',];

    public function comments()
    {
        return $this->hasMany(Comments::class, 'user_id');
    }
}
