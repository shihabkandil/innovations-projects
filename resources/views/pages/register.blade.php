@extends('layouts.app')

<title>Register</title>

@section('content')
<div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center">
                <h1 class="mb-5">Register here !</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 mx-auto">
                    <form>
                        <div class="row g-3"> 
                            <div class="col-12">
                                    <div class="form-floating">
                                        <input type="name" class="form-control" id="name" placeholder="Full name">
                                        <label for="email">Full Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>


                                <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                    <label for="name">Password</label>
                                </div>
                            </div>




                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="confirmpass">
                                    <label for="name">Confirm Password</label>
                                </div>
                            </div>


                              <!-- gender radio button-->
                                <div >
 
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 
                      
                              <label class="form-check-label" for="flexRadioDefault1">
  
                             Male
  
                            </label>

                        </div>

                        <div >

                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>

                        <label class="form-check-label" for="flexRadioDefault2">

                            Female

                    </label>

                </div>



                            <div class="col-12 ">
                                <button class="btn btn-warning w-100 py-3" type="submit">Register</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection