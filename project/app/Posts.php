<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Posts extends Model
{
    protected $fillable = ['name', 'image', 'content', 'price', 'author_id', 'post_id'];

    use Commentable;
}
