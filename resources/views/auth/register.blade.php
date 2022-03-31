@extends('layouts.app')

<title>Register</title>

@section('content')

        <div class="container-xxl py-5 d-flex">
            <div class="container">

                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Register')}}</h6>
                    <h1 class="mb-5">{{ __('Join Us')}}</h1>
                </div>

                    <div class="row">
                        <div class="col">
                        <a href="/student_register">
                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('img/student.jpg')}}" alt="">
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <h5 class="mb-4">Join as Student</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>

                        <div class="col">
                        <a href="instructor_register">
                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('img/instructor.jpg')}}" alt="">
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <h5 class="mb-4">Join as Instructor</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>

                    </div>
            </div>
        </div>

@endsection