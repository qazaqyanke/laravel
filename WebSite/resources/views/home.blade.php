@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        @if(! auth()->user()->two_factor_secret)
                            You have not enable 2fa
                            <form action="{{url('user/two-factor-authentication')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    Enable
                                </button>
                            </form>
                        @else
                            You have 2fa enabled
                            <form action="{{url('user/two-factor-authentication')}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">
                                    Disable
                                </button>
                            </form>
                        @endif

                        @if(session('status') == 'two-factor-authentication-enabled')
                            You have now enabled 2fa,please scan the following QR code into your
                            phones authenticator application
                            {{!! auth()->user()->twoFactorQrCodeSvg() !!}}

                            <p>Please store theses recovery codes in a secure location</p>
                            @foreach(\GuzzleHttp\json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                                    {{ trim($code) }} <br>
                                @endforeach
                            @endif

                    </div>/
                </div>
            </div>
        </div>
    </div>
@endsection
