<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'type_id', 'chapter_id', 'content'];

    public function type()
    {
        return $this->belongsTo(LessonType::class, 'type_id');
    }
}
