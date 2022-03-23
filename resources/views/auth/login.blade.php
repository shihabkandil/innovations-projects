@extends('layouts.app')
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</header>


<title>Login</title>

@section('content')

<div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center">
                <h1 class="mb-5">{{ __('Login') }}</h1>
            </div>
            <form method="POST">
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
                        <button type="button" style="background-color:royalblue;" class="btn btn-primary w-100 py-2"><b>{{ __('Login with Facebook') }}</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection