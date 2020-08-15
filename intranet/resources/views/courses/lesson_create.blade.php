@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col">
                <form method="post" action="{{route('lessons.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Lesson title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="type">Lesson type</label>
                        <select class="form-control" id="type" name="type">
                            @foreach($lessonTypes as $lessonType)
                                <option value="{{$lessonType->id}}">{{$lessonType->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Chapter</label>
                        <select class="form-control" id="chapter" name="chapter">
                            @foreach($chapters as $chapter)
                                <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
@endsection
