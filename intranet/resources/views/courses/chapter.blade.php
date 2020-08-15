@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <a href="{{route('lessons.create')}}" class="btn btn-info">Add lesson</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <table id="courses">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Lesson type</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td>{{$lesson->title}}</td>
                            <td>{{$lesson->type->name}}</td>
                            <td><a href="{{route('lessons.show', $lesson)}}" class="btn btn-info">More</a></td>
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
                    <form>
                        <div class="form-group">
                            <label for="name">Chapter name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="type">Chapter type</label>
                            <select class="form-control" id="type" name="type">
                                <option>Lecture</option>
                                <option>Homework</option>
                            </select>
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
        $(document).ready(function () {
            $('#courses').DataTable();
        });
    </script>
@endsection
