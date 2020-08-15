<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function lessons()
    {

        return $this->hasMany(Lesson::class);
    }
}
