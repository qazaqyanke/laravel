<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    public function lessons(Chapter $chapter)
    {
        $lessons = $chapter->lessons()->with('type')->get();
        return view('courses.chapter', compact('lessons'));
    }
}
