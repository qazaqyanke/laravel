<?php

use App\LessonType;
use Illuminate\Database\Seeder;

class LessonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LessonType::create([
           'name' => 'Video Lecture' ,
        ]);
        LessonType::create([
            'name' => 'Text Lecture' ,
        ]);
        LessonType::create([
            'name' => 'Practice' ,
        ]);
        LessonType::create([
            'name' => 'Homework' ,
        ]);
    }
}
