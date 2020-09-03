<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function myad()
    {
        return view('layout.myad');
    }

    public function index()
    {
        $posts = Posts::all();
        $users = User::all();

        return view('index', compact('posts', 'users'));
    }
}
