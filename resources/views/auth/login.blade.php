@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<body class="body1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 10px 10px 5px #aaaaaa; wid">
                <div class="card-header"><h2 class="h2">АДМИН</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                        <ul>
                @foreach ($errors->all() as $error)
            <li class="fa fa-warning"> {{ $error }} </li>
        @endforeach
        </ul>
    <div class="form-group row">
    <input id="email" placeholder="Нэр" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                          
    </div>
    <div class="form-group row">
    <input id="password" placeholder="Нууц үг" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>

                       {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>--}}

                        <div class="form-group row mb-center">
                            <div class="col-md-center offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('НЭВТРЭХ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>--}}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body1>
@endsection
