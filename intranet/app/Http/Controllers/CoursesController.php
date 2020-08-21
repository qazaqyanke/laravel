<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|string',
            'cost' => 'required|numeric',
        ]);

        Course::create([
            'name' => request('name'),
            'cost' => request('cost'),
        ]);

        return back();
    }

    public function chapters(Course $course)
    {
        $chapters = $course->chapters;
        return view('courses.chapters', compact('chapters'));
    }

    public function update(Course $course)
    {
        request()->validate([
            'name' => 'required|string',
            'cost' => 'required|numeric',
        ]);

        $course->name = request('name');
        $course->cost = request('cost');
        $course->save();

        return back();
    }

    public function delete(Course $course)
    {
        if ($course->chapters->isEmpty()) {
            $course->delete();
        }

        return back();
    }
}
