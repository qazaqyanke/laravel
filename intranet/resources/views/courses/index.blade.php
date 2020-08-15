@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                    Add course
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <table id="courses">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->name}}</td>
                            <td><a href="{{route('courses.chapters', $course)}}" class="btn btn-info">More</a></td>
                        </tr>
                        <tr>
                            <form action="{{route('courses.destroy', $course->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger" style="margin-top: 5px;">
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="{{route('courses.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Course name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#courses').DataTable();
        } );
    </script>
@endsection
