@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="https://images.unsplash.com/photo-1456743625079-86a97ff8bc86?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <h1>{{ $error }}</h1>
                        @endforeach
                    @endif
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="card-body">
                        @if(session('status'))
                            <div role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                        <p class="login-card-description">You must verify your email adress, please check your email for a varification link.</p>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Resend Email">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
