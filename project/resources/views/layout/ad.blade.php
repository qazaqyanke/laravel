@extends('layout.layouts')
@section('content')
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8" style="margin-top: 30px;">
            <h1 class="my-4 ml-3">New Ad
            </h1>
            <div class="col-xl">
                <form method="POST" action="{{route('store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="inputTitle">Name</label>
                        <input type="text" class="form-control " id="inputTitle" placeholder="Name" name = "title">
                        <p class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="inputDesc">Content</label>
                        <textarea name="description" id="inputDesc" cols="30" rows="5" class = "form-control"></textarea>
                        <p class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="inputDesc">Image</label>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </form>
                    </div>
                    <div class="form-group">
                        <label for="inputLikes">Price</label>
                        <input type="number" class="form-control" id="Price" placeholder="Price" name = "Price" value="Price">
                        <p class="text-danger"></p>
                    </div>
                    <div class="form-group">

                    </div>
                    <input type="submit" class="btn btn-primary" value="submit">

                </form>
            </div>
        </div>
    </div>
@endsection
