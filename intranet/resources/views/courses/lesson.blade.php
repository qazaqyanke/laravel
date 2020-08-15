@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col">

                <h2>{{$lesson->title}}</h2>
                <p>{!!  $lesson->content !!}</p>

            </div>

        </div>
    </div>

@endsection
