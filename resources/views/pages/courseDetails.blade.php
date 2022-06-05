@extends('layouts.app')

@section('content')
<?php 
    use App\Http\Controllers\FirestorageController;
    use App\Models\ContentCreator;
    ?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>{{$course->CourseName}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('lib/owlcarousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('lib/owlcarousel/assets/owl.theme.default.css')}}">     
    <link rel="stylesheet" href="{{asset('animate/animate.css')}}"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">  
    <!-- main style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/detailsCoursestyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
    
<div class="banner-image">
    <img src="{{asset('img/img_2.jpg')}}">
    <div class="text-block">
        <div  id="courses_details_wrapper">       
                        <div class="courses_details">
                            <div class="single-curses-contert">
                                <div class="details-img-bxo">
                                    <img src="<?php echo FirestorageController::fetch('Courses/Pictures/',$course->CoursePicture)?>" alt="{{$course->CourseName}}" class="img-fluid" width="25%">
                                </div>
                                <h2 style="color:white">{{$course->CourseName}} Course</h2>
                                <div class="review-option ">
                                    <div class="teacher-info">
                                        <div class="teacher-name m-2">
                                            <h4 class="sub-header-course">Instructor <?php echo ContentCreator::getContentCreator($course->CourseInstructorID)[0]->name; ?></h4>
                                        </div>
                                    </div>
                                    <div class="review-rank mx-5">
                                        <h4 class="sub-header-course">Reviews</h4>
                                        <div class="rank-icons">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-star review-icon"></i></li>
                                                <li><i class="fa fa-star review-icon"></i></li>
                                                <li><i class="fa fa-star review-icon"></i></li>
                                                <li><i class="fa fa-star review-icon"></i></li>
                                                <li><i class="fa fa-star review-icon"></i></li>
                                                <li><span>(8 Reviews)</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="teacher_fee single_items m-2 ">
                                        <h4 class="sub-header-course">Price</h4>
                                        <h2 style="color: antiquewhite" class="sub-header-course">EGP {{$course->CoursePrice}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                
<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="courses_tab_wrapper">  
                        <div class="courses_details_nav_tabs">     
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab">Curricularm</a></li>
                                <li class="nav-item"><a class="nav-link" href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                        </div>   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                <p style="white-space: pre-wrap; overflow-wrap: break-word;">{{$course->courseDesc}}</p>
                                <h3>What Will I Learn? <span>:</span></h3>
                                <p style="white-space: pre-wrap; overflow-wrap: break-word;">{{$course->whatWillILearn}}</p>                            
                                <h3>Learning Outcomes <span>:</span></h3>
                                <p style="white-space: pre-wrap; overflow-wrap: break-word;">{{$course->learningOutcomes}}</p>                            
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        <div class="panel-group" id="accordion">
                                            <?php $i = 0; ?>
                                            @foreach ($lesson as $lessonData)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"> {{$lessonData->name}}
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" class="collapsed"> </a> 
                                                    </h4>
                                                </div>
                                                @if($userType == 'student')
                                                @if($enrolled != false)
                                                <div id="collapse{{$i}}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                    <p style="white-space: pre-wrap; overflow-wrap: break-word;">{{$lessonData->body}}</p>
                                                    </div>
                                                </div>
                                                @endif
                                                @else
                                                <div id="collapse{{$i}}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                    <p style="white-space: pre-wrap; overflow-wrap: break-word;">{{$lessonData->body}}</p>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            <?php $i++; ?>
                                            @endforeach
                                        </div> <!-- .curriculum-section-text END -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <!-- Blog Comment Wrappper-->
                                <div class="review-content">
                                    <div class="five-star-rating">
                                        <div class="rating_box_count">
                                            <span class="five">5</span>
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span>8 Ratings</span>                  
                                        </div>
                                    </div>
                                    <div class="rating-box">
                                        <div class="detailed-rating">
                                            <div class="stars">
                                                <div class="key">5 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 100%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">8</div>
                                            </div>

                                            <div class="stars">
                                                <div class="key">4 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>

                                            <div class="stars">
                                                <div class="key">3 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>
                                            <div class="stars">
                                                <div class="key">2 stars</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                         <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>
                                            <div class="stars">
                                                <div class="key">1 star</div>
                                                <div class="bar">
                                                    <div class="full_bar">
                                                        <span style="width: 0%"></span>
                                                    </div>
                                                </div>
                                                <div class="value">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                              


                                <div class="commnet-wrapper">
                                     <div class="comment-list-items">
                                        <div class="comment-list-wrapper">
                                            <div class="comment-list">
                                                <div class="commnet_img">
                                                    <img src="{{asset('img/img.jpg')}}" alt="member img" class="img-fluid">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="author_info d-flex justify-content-between"> 
                                                        <a href="#" class="author_name">Adam Smith</a> 
                                                        <span>2 Days Ago</span>
                                                    </div>
                                                    <div class="rating">
                                                        <ul class="rating d-flex justify-content-start">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>   
                                                        </ul>  
                                                    </div>   
                                                    <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-list-wrapper">
                                            <div class="comment-list">
                                                <div class="commnet_img">
                                                    <img src="{{asset('img/img.jpg')}}" alt="member img" class="img-fluid">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="author_info d-flex justify-content-between"> 
                                                        <a href="#" class="author_name">David Martin</a>
                                                        <span>2 Days Ago</span> 
                                                    </div>  
                                                    <div class="rating">
                                                        <ul class="rating d-flex justify-content-start">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>   
                                                        </ul>  
                                                    </div>     
                                                    <p>you need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div> <!--End Blog Siderbar Left-->


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Courses Features</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled" style="color: lightgrey;">
                                <li>Duration<span>{{$course->duration}}</span></li>
                                <li>Certificate<span>{{$course->certificate}}</span></li>
                                <li>Language<span>{{$course->lang}}</span></li>
                                <li>Skills<span>{{$course->skills}}</span></li>
                                <li>Lessons<span>{{$i}}</span></li>
                            </ul>
                        </div>
                        <img src="{{asset('img/testimonial_2_shpe_2.png')}}" alt="" class="courses_feaures_shpe">
                    </div>  
            </div> <!-- End Right Sidebar-->
            
        </div>
    </div> 
</section><!-- ./ End  Blog Wrapper-->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>     
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>   
    <script src="{{asset('lib/wow/wow.min.js')}}"></script> 
    <!-- Counter Script -->
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>   
</body>
</html>
@endsection
