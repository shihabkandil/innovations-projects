@extends('layouts.app')

<title>Instructor Register</title>

@section('content')

<div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center">
                <h1 class="mb-5">{{ __('Instructor Register') }}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 mx-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf 
                        <div class="row g-3"> 

                            <div class="col-12">
                                    <div class="form-floating">
                                        <input id="name" type="text" placeholder="{{ __('Full name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="name">{{ __('Full name') }}</label>
                                    </div>
                            </div>

                             <div class="col-12">
                                <div class="form-floating">
                                        <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label for="password">{{ __('Password') }}</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="password_confirmation" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">About You</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload your CV</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <div class="col-12 ">
                                <button class="btn btn-warning w-100 py-3" type="submit">{{ __('Register') }}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection