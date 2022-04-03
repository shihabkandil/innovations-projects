@extends('layouts.app')

@section('content')
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
                                    <img src="{{asset('img/img.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <h2 style="color:white">{{$course->CourseName}} Course</h2>
                                <div class="review-option ">
                                    <div class="teacher-info">
                                        <img src="{{asset('img/review_1.jpg')}}" alt="" class="img-fluid">
                                        <div class="teacher-name m-2">
                                            <h4 class="sub-header-course">Teacher</h4>
                                            <span>DAVID MARTIN</span>
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
                                        <h2 style="color: antiquewhite" class="sub-header-course">EG 5000</h2>
                                    </div>
                                    <div class="buy_btn single_items mx-2">
                                        <a style="color:black" href="#" title="">Add to cart</a>
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
                                <li class="nav-item"><a class="nav-link" href="#instructor" role="tab" data-toggle="tab">Instructor</a></li> 
                                <li class="nav-item"><a class="nav-link" href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                        </div>   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <h3>What Will I Learn? <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>  
                                <ul class="step_point">
                                    <li>Create static HTML and CSS portfolio sites and landing pages.</li>
                                    <li>Think like a developer. Become an expert at Googling code questions!</li>
                                    <li>Write complex web apps with multiple models and data associations.</li>
                                    <li>Create a blog application from scratch using Express, MongoDB, and Semantic UI.</li>
                                    <li>Using Express and MongoDB to create full-stack JS applications.</li>
                                </ul>                              
                                <h3>Learning Outcomes <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <ul class="step_point">
                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                    <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                    <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                    <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                                    <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                    <li>Course content designed by considering current software testing technology and the job market.</li>
                                    <li>Practical assignments at the end of every session.</li>
                                    <li>Practical learning experience with live project work and examples.</li>
                                </ul>
                                <div class="social_wrapper d-flex">
                                    <span>Share : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title click">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
                                                        1. Welcome to the Courses<span>0/5</span></a>
                                                    </h4>

                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in show">
                                                    <div class="panel-body">
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                           <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                                        2. How to use Wordpress<span>0/4</span></a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                                    3. Final chapters<span>0/3</span></a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                                <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                            </div>
                                                            <a href="#">Preview</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div> <!-- .curriculum-section-text END -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="instructor">
                                <div class="courses_teacher">
                                    <div class="tutor_signle">
                                        <div class="tutor_pro">
                                            <a href="#" title=""><img src="" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="teachers_name">
                                            <h5><a href="#" title="">Jonson Park</a></h5>
                                            <span>Associate Professor</span>
                                        </div>
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
                            <ul class="list-unstyled">
                                <li><a href="#" title=""><i class="flaticon-page"></i> Lessons </a><span>69</span></li>
                                <li><a href="#" title=""><i class="flaticon-eye-open"></i> Viewers</a><span>56</span></li>
                                <li><a href="#" title=""><i class="flaticon-clock-circular-outline"></i> Duration</a><span>5H</span></li>
                                <li><a href="#" title=""><i class="flaticon-padlock"></i> Prequisite</a><span>No</span></li>
                                <li><a href="#" title=""><i class="flaticon-diploma"></i> Certificate</a><span>Yes</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-language"></i> Language</a><span>Eng</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-thumbs-up-hand-symbol"></i> Skills</a><span>Any</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-edit"></i> Assessments</a><span>Yes</span></li>
                            </ul>
                        </div>
                        <img src="{{asset('img/testimonial_2_shpe_2.png')}}" alt="" class="courses_feaures_shpe">
                    </div>  



                    <div class="recent_post_wrapper popular_courses_post widget_single">
                        <div class="items-title">
                            <h3 class="title">Our Popular Courses</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src="{{asset('img/img.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within qa Week.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>74$</del></span> <span class="new_price">49$</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{asset('img/img_2.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Connecting volunteers & nonprofitsz worldwide.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>60$</del></span> <span class="new_price">38$</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{asset('img/img.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="courses_price">
                                    <div class="price"><span class="new_price">79$</span></div>
                                </div>
                            </div>
                        </div>
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
