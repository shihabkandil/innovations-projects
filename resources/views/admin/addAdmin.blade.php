@extends('layouts.master')
@section('content')

<div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center">
                <h1 class="mb-5">{{ __('Add Adminstrator') }}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 mx-auto">
                    <form method="POST" action="{{ route('addAdminForm') }}">
                        @csrf 
                        <div class="row g-3"> 
                            <div class="col-12">
                                    <div class="form-floating">
                                        <input id="name" type="text" placeholder="Full name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="name">Full name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="password_confirmation" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <button class="btn btn-secondary w-50 py-3" type="submit">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection