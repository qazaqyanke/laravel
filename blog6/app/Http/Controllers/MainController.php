<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\PostDetail;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
          $posts = Post::all();
          $tags = Tag::all();

        return view('index' , compact('posts', 'tags'));
    }

    public function show(Post $post)
    {

        return view('post', compact('post'));
    }

    public function about()
    {
        return view('about');
    }

    public function create()
    {
        $tags = Tag::all();
        return view('create', compact( 'tags'));
    }

    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    public function store()
    {

        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'full_description' => 'required',
            'likes' => 'required',
        ]);

        $post = Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes,
        ]);

        PostDetail::create([
           'full_description' => request()->full_description,
            'post_id' => $post->id,
        ]);

        $post->tags()->attach(request()->tags);


        return redirect(route('post.index'));
    }

    public function update(Post $post)
    {
        $post->update([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes
        ]);


        return redirect(route('post.show', $post->id));
    }

    public function storeComment(Post $post)
    {
        request()->validate([
            'author' => 'required',
            'comment' => 'required',
        ]);

        $comment = new Comment([
            'author' => request()->author,
            'comment' => request()->comment,
        ]);
        $post->comments()->save($comment);

        return redirect(route('post.show',request()->post_id));



    }

    public function storeTag()
    {
        request()->validate(['name' => 'required']);
        Tag::create([
            'name' => request()->name,
        ]);
        return redirect(route('post.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route('post.index'));

    }

    public function destroyTag(Tag $tag)
    {
        $tag->delete();

        return redirect(route('post.index'));
    }





}
