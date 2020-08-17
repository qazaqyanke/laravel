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
            'name' => 'required|string'
        ]);

        Course::create(['name' => request('name')]);

        return back();
    }

    public function chapters(Course $course)
    {
        $chapters = $course->chapters;
        return view('courses.chapters', compact('chapters'));
    }

    public function destoryCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return back();
    }
}
