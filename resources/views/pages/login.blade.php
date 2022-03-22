@extends('layouts.app')
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</header>


<title>Login</title>

@section('content')

<div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center">
                <h1 class="mb-5">Login</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 mx-auto">
                    <form>
                        <div class="row g-3"> 
                            <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Password</label>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <button class="btn btn-warning w-100 py-3" type="submit">Login</button>
                            </div>
                            <div class="col-12 ">
                                <button class="btn btn-primary w-100 py-3" type="submit"><b>f</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection