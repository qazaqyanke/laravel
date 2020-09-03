<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
      'author',
      'comment',
        'post_id'
    ];

    public function post()
    {
        return $this->belongsTo(Posts::class);
    }

}
