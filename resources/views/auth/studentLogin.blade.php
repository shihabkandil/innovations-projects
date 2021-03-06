@extends('layouts.app')
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</header>


<title>Login</title>

@section('content')

<div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center">
                <h1 class="mb-5">{{ __('Student Login') }}</h1>
            </div>
            <form method="POST" action="{{ route('studentLoginForm') }}">
                @csrf
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 mx-auto">
                        <div class="row g-3"> 
                            <div class="col-12">
                                    <div class="form-floating">
                                        <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <label for="email">{{ __('Your Email') }}</label>
                                    </div>
                                </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<label for="name">{{ __('Password') }}</label>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <button type="submit" class="btn btn-warning w-100 py-3">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-12 pt-2">
                        <a href="{{url('redirect/facebook')}}" class="btn btn-primary w-100 py-2" style="background:#3c5a99;"><b>Login with Facebook</b></a>
                    </div>
                    <div class="col-12 pt-2">
                        <a class="btn" href="{{url('redirect/google')}}">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                            Login with Google
                        </a>                    
                    </div>
                    <div class="col-12 pt-2">
                        <a href="{{route('contentCreatorLoginForm')}}" class="btn w-100 py-2"><b>Login as Content Creator</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection