<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Posts;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('layout.ad', compact('users'));
    }

    public function store()
    {
        $posts = Posts::create([
            'name' => request()->name,
            'content' => request('content'),
            'image' => request()->image,
            'price' => request()->price,
            'author_id' => auth()->id(),
        ]);

        $users = User::all();

        return view('layout.ad', compact('users'));
    }

    public function show($id)
    {
        $posts = Posts::findOrFail($id);
        return view('layout.adshow', compact('posts'));
    }

    public function comments(Posts $posts)
    {
        request()->validate([
           'author' => 'required',
            'comment' => 'required',
        ]);

        $comments = new comments([
        'author' => request()->author,
        'comment' => request()->comment,
        ]);

        $posts->comments()->save($comments);

        return redirect(route('layout.adshow', compact('comments'),request()->post_id));
    }
}
