<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(User $user)
    {
        $message = new Message();
        $message->content = request('content');
        $message->from_user = auth()->user()->id;
        $message->for_user = $user->id;
        $message->save();

        return back();
    }

    public function show(User $user)
    {
        $messages = Message::where(function (Builder $query) use ($user) {
            $query->where('from_user', auth()->user()->id)
                ->where('for_user', $user->id);
        })->orWhere(function (Builder $query) use ($user) {
            $query->where('from_user', $user->id)
                ->where('for_user', auth()->user()->id);
        })->get();

        return view('message.show', compact('user', 'messages'));
    }
}
