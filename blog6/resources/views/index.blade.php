@extends('layout')
@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>

            @foreach($posts as $post)
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">Read More &rarr;</a>
                    <a href="{{route('post.edit', $post->id)}}" class="btn btn-success">Edit &rarr;</a>
                    <form method="POST" action="{{route('post.destroy', $post->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger" style="margin-top: 5px;">
                    </form>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$post->created_at}} by
                    <a href="/" style="text-decoration: none;">Twitter</a>
                    <p>

                        @foreach($post->tags as $tag)

                            <a href="#">{{$tag->name}}</a>,

                        @endforeach

                    </p>
                </div>
            </div>
            @endforeach


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="/">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="/">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
{{--            <div class="card my-4">--}}
                <h5 class="card-header">Tags</h5>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#tagModal">

                    add tag

                </button>



                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                @foreach($tags as $tag)
                                <li>
                                    <a href="#">{{$tag->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                            <form action="{{route('tag.destroy', $tag->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{--                        <div class="card my-4">--}}

                                <input type="submit" value="Delete tag" class="btn btn-danger" style="margin-top: 5px;">

                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Side Widget -->
{{--            <div class="card my-4">--}}
{{--                <h5 class="card-header">Side Widget</h5>--}}
{{--                <div class="card-body">--}}
{{--                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

    </div>

    <!-- /.row -->

    <!-- Modal -->

    <div class="modal fade" id="tagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Add tag</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form action="{{route('tag.store')}}" method="POST">

                    @csrf

                    <div class="modal-body">

                        <div class="form-group">

                            <label for="inputAuthor">name</label>

                            <input

                                type="text"

                                class="form-control "

                                id="inputAuthor"

                                placeholder="name"

                                name = "name">

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- /.container -->
@endsection
