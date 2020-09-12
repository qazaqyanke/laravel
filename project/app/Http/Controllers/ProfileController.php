<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {

        $users = User::findOrFail($id);

        return view('layout.profile', compact('users'));
    }


}
