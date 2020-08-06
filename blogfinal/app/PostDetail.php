<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    protected $fillable = ['full_description', 'post_id'];
}
