<?php

use App\Chapter;
use App\Course;
use App\Lesson;
use App\LessonType;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 2)
            ->create()
            ->each(function ($course) {
                factory(Chapter::class, 5)->create([
                   'course_id' => $course->id
                ])->each(function ($chapter){
                    factory(Lesson::class, 5)->create([
                        'type_id' => LessonType::all()->random(1)->first()->id,
                        'chapter_id' => $chapter->id
                    ]);
                });
            });
    }
}
