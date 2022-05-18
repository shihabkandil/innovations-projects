@extends('layouts.app')
    @section('content')
    <head>
        <meta charset="utf-8">
        <title>{{ __('Innovations Projects')}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/news-snip.css')}}" rel="stylesheet">
        
    </head>
    

            <!-- Carousel Start -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-8 col-lg-8">
                                <h5 class="text-primary text-uppercase m-4 animated slideInDown">{{ __('messages.Start your journey')}}</h5>
                                <h1 class="display-3 text-white animated slideInDown mx-4">{{ __('messages.Effective Video Lessons')}}</h1>
                                <p class="fs-5 text-white mb-4 pb-2 mx-4">{{ __('messages.Browse our courses catalog and see what can help you develop yourself')}} </p>
                                <a href="/categories" class="btn btn-primary py-md-3 px-md-5 mx-4 me-3 animated slideInLeft">{{ __('messages.Browse Courses')}}</a>
                                @if(!(Auth::guard('student')->check() || Auth::guard('contentCreator')->check()))
                                <a href="/register" class="mx-4 btn btn-light py-md-3 px-md-5 animated slideInRight">{{ __('messages.Join Now')}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="mx-4 text-primary text-uppercase mb-3 animated slideInDown">{{ __('messages.Helpful Articles')}}</h5>
                                <h1 class="mx-4 display-3 text-white animated slideInDown">{{ __('messages.Articles written by experts')}}</h1>
                                <p class="mx-4 fs-5 text-white mb-4 pb-2">{{ __('messages.Articles are written by researchers or experts in order to share the results of their original research or analysis with other researchers and students')}}.</p>
                                <a href="/articles" class="mx-4 btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ __('messages.Read More')}}</a>
                                @if(!(Auth::guard('student')->check() || Auth::guard('contentCreator')->check()))
                                <a href="/register" class="mx-4 btn btn-light py-md-3 px-md-5 animated slideInRight">{{ __('messages.Join Now')}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
             <!-- Carousel End -->

        <!-- About Start -->
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-danger" role="alert">{{session('status')}}</div>
            @endif
        </div>


        <!-- Courses Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('messages.Courses')}}</h6>
                    <h1 class="mb-5">{{ __('messages.Popular Courses')}}</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/course-1.jpg')}}" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/course-2.jpg')}}" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/course-3.jpg')}}" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('messages.News Section')}}</h6>
                    <h1 class="mb-5">{{ __('messages.News')}}</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <figure class="snip grid-item">
                            <div class="image"><img src={{$news[$i]['urlToImage']}} alt="" /></div>
                            <a href={{$news[$i]['url']}}></a>
                            <figcaption>
                                <h3>{{\Illuminate\Support\Str::limit($news[$i]['title'],50,$end='...')}}</h3>
                                <p style="font-size: 14px">{{\Illuminate\Support\Str::limit($news[$i]['description'],120,$end='...')}}</p>
                                <h3>{{\Illuminate\Support\Str::limit($news[$i]['author'],30,$end='...')}}</h3>
                            </figcaption>
                        </figure>
                    </div>
                    @endfor
                </div>
            </div>
        </div>


        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="4s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{ __('messages.Articles Section')}}</h6>
                    <h1 class="mb-5">{{ __('messages.Articles')}}</h1>
                </div>
            </div>
        </div>

        
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/lib/owlcarousel/owl.rtl.js') }}"></script>
@endsection