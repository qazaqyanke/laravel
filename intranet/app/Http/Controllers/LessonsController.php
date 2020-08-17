<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Lesson;
use App\LessonType;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function create()
    {
        $lessonTypes = LessonType::all();
        $chapters    = Chapter::all();

        return view('courses.lesson_create', compact('lessonTypes', 'chapters'));
    }

    public function store()
    {
        request()->validate([
            'title'   => 'required|string',
            'type'    => 'required|exists:lesson_types,id',
            'chapter' => 'required|exists:chapters,id',
            'content' => 'required|string',
        ]);

        Lesson::create([
            'title'      => request('title'),
            'chapter_id' => request('chapter'),
            'type_id'    => request('type'),
            'content'    => request('content'),
        ]);

        return redirect()->route('courses.chapter', request('chapter'));
    }

    public function show(Lesson $lesson)
    {
        return view('courses.lesson', compact('lesson'));
    }
}
