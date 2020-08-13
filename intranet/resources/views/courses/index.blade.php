@extends('layouts.app')

@section('content')
    <div class="container">
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
                    <tr>
                        <td>Laravel</td>
                        <td><a href="{{route('courses.show', 1)}}" class="btn btn-info">More</a></td>
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
