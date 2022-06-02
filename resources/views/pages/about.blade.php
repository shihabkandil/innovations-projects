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
                        <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('messages.About Us')}}</h6>
                        <h1 class="mb-4">{{ __('Welcome to Innovations Projects')}}</h1>
                        <p class="mb-4">{{ __('messages.about us text 1')}}</p>
                        <p class="mb-4">{{ __('messages.about us text 2')}}</p>
                            <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('messages.Skilled Instructors')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('messages.Online Lessons')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('messages.Experts\' articles')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('messages.Verified Certificates')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('messages.Bundles')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection