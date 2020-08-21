@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                    Add chapter
                </button>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table id="courses">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chapters as $chapter)
                        <tr>
                            <td>{{$chapter->name}}</td>
                            <td>
                                <a href="{{route('chapters.lessons', $chapter)}}" class="btn btn-info">More</a>
                                <button class="btn btn-light"
                                        data-toggle="modal" data-target="#editModal"
                                        data-path="{{route('chapters.update', $chapter)}}"
                                        data-params="{{$chapter->toJson()}}">
                                    Edit
                                </button>
                                <button class="btn btn-danger"
                                        onclick="event.preventDefault();document.getElementById('delete-form-{{$chapter->id}}').submit();">
                                    Delete
                                </button>
                                <form method="post" id="delete-form-{{$chapter->id}}" action="{{route('chapters.delete',
                          $chapter)}}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
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
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="modal-form" method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Chapter name</label>
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
        $(document).ready(function () {
            $('#courses').DataTable();
        });
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var path = button.data('path')
            var params = button.data('params')
            var modal = $(this)
            modal.find('.modal-form').attr('action', path)
            modal.find('#name').val(params.name)
        })
    </script>
@endsection

