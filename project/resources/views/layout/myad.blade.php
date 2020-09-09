@extends('layout.layouts')
@section('content')
<div style="margin-top: 50px;">
    @foreach($posts as $post)
        <div class="container">
            <div class="row">
                <div class="card mb-4">
                    <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->name}}</h2>
                        <p class="card-text">{{$post->content}}</p>
                        <p class="card-text">{{$post->price}}</p>
                        <a href="{{route('layout.adshow',$post->id)}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on  by
                        <a href="/" style="text-decoration: none;">{{$post->author_id}}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
