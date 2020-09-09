@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col">

                <h3>{{$user->email}}</h3>

                @foreach($messages as $message)

                    <label>{{$message->fromUser->email}}</label>
                    <p>{{$message->content}}</p>
                    <hr>

                @endforeach

                <form method="post" action="{{route('message.send', $user)}}">
                    @csrf
                    <div class="form-group">
                        <textarea name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
