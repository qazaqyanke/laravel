@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h2>Payment proceeded successfully</h2>
                <p> Total payment amount - {{$payment->amount}}} tg</p>
                <p> Payment proceeded at: {{$payment->created_at}}</p>

                <a href="#" class="btn btn-success">Download bill</a>
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
