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
                        <label for="InputName">Name</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Name" name = "name">
                        <p class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Content</label>
                        <textarea name="content" id="inputContent" cols="30" rows="5" class = "form-control"></textarea>
                    </div>
                    <div class="form-group">
                       <label for="inputDesc">Image</label>
                           <div class="form-group">
                               <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                           </div>
                    </div>
                    <div class="form-group">
                        <label for="InputPrice">Price</label>
                        <input type="number" class="form-control" id="InputPrice" placeholder="price" name = "price" value="price">
                        <p class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="InputAutor">Author</label>
                        <select name="Authors" id="inputAuthors" class="form-control" multiple>

                            @foreach($users as $user)

                                <option value="{{$user->id}}">{{$user->name}}</option>

                            @endforeach
w
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
