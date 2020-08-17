@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <table id="payments">
                <thead>
                <tr>
                    <td>ID</td>
{{--                    <td>Student Name</td>--}}
                    <td>Course</td>
                    <td>Amount</td>
                    <td>Date</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>8997846</td>
{{--                    <td>Alesk Joe</td>--}}
                    <td>laravel</td>
                    <td>50000</td>
                    <td>2020-08-19 19:13</td>
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
            $('#payments').DataTable();
        } );
    </script>
@endsection
