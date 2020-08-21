<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ChaptersController extends Controller
{
    public function lessons(Chapter $chapter)
    {
        $lessons = $chapter->lessons()->with('type')->get();
        return view('courses.chapter', compact('lessons'));
    }

    public function delete(Chapter $chapter)
    {
        $validator = Validator::make(['id' => $chapter->id], [
            'id' => [
                function ($attribute, $value, $fail) use ($chapter) {
                    if ($chapter->lessons->isNotEmpty()) {
                        $fail('There are already lessons added to chapter '.$chapter->name);
                    }
                }
            ]
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        return back();
    }

    public function update(Chapter $chapter)
    {
        //    TODO add validation

        $chapter->name = request('name');
        $chapter->save();

        return back();
    }
}
