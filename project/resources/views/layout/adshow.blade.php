@extends('layout.layouts')
@section('content')
    <div class="row" style="margin-top: 50px;">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="my-4">Post details</h1>
            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{$posts->name}}</h2>
                    <p class="card-text">{{$posts->content}}</p>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$posts->created_at}} by
                    <a href="#">Author</a>
                </div>
            </div>
            <a href="/" class="btn btn-primary" style="margin-bottom: 15px;">Go Back</a>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-8">
            <h3 class="my-4">Post Comments
            </h3>
            @comments(['model' => $posts])
        </div>
    </div>
    <!-- /.row -->
    <!-- Modal -->

@endsection
