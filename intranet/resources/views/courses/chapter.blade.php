@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col">

                <a href="{{route('courses.lesson.create')}}" class="btn btn-info">Add</a>

                <table id="courses">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Lesson type</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lesson 1</td>
                        <td>Lecture</td>
                        <td><a href="{{route('courses.lesson', 1)}}" class="btn btn-info">More</a></td>
                    </tr>
                    </tbody>
                </table>
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
