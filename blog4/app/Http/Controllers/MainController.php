<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {

//        $posts = \DB::table('posts')->get();
          $posts = Post::all();


        return view('index' , compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function show($id)
    {
//        \DB::enableQueryLog();
        //$post = \DB::table('posts')->where('id', '=', $id)->first();
//        dd(\DB::getQueryLog());
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }

    public function store()
    {
        //validation
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'likes' => 'required',
        ]);

        //save to DB
        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes
        ]);

        return redirect(route('post.index'));
    }

    public function update($id)
    {
        Post::findOrFail($id)->update([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes
        ]);


        return redirect(route('post.show', $id));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect(route('post.index'));
//        dd(\request()->all());
    }

}
