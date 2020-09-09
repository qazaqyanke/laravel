<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['from_user', 'for_user', 'content'];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user');
    }
    public function forUser()
    {
        return $this->belongsTo(User::class, 'for_user');
    }
}
