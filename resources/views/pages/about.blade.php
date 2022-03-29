@extends('layouts.app')

<title>About Us</title>

@section('content')

<div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about.jpg')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('About Us')}}</h6>
                        <h1 class="mb-4">{{ __('Welcome to Innovations Projects')}}</h1>
                        <p class="mb-4">{{ __('The hospitality and retail industry has been steadily developing at a rapid speed in Egypt and due
                            to its fast development the workers in this field haven’t been able to keep up with it and implement
                            the newest cutting edge technologies and practices that will advance their quality of service to the
                            next level.')}}</p>
                        <p class="mb-4">{{ __('Our web application will close this gap as it will include a variety of courses
                            taught by experts in the field of retail and hospitality, and it will display the latest news in those
                            fields.')}}</p>
                            <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('Skilled Instructors')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('Online Classes')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('Experts\' articles')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('Verified Certificates')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('Bundles')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection