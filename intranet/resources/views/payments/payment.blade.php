@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <form method="post" action="{{route('payments.proceed')}}">
                    @csrf
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="number" class="form-control" id="cardNumber" name="cardNumber">
                    </div>
                    <div class="form-group">
                        <label>Full NAme</label>
                        <input type="text" class="form-control" id="fullName" name="fullName">
                    </div>
                    <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="number" class="form-control" id="expirationDate" name="expirationDate">
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="number" class="form-control" id="cvv" name="cvv">
                    </div>
                    <div class="form-group">
                        <label for="type">Course</label>
                        <select name="type" id="type" class="form-control">
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}} - {{$course->cost}} tg</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-info" type="submit">Submit</button>
                </form>
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
