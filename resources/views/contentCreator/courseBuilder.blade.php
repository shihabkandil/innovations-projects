@extends('layouts.app')

@section('content')
<html lang="en">

<head>
    
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
    <!-- Required meta tags -->
    <meta charset="UTF-8">
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
<form method="POST" action="" enctype="multipart/form-data">
@csrf 
<div class="banner-image">
    <img src="{{asset('img/img_2.jpg')}}" style="width: 100%;">
    <div class="text-block">
        <div  id="courses_details_wrapper">       
                        <div class="courses_details">
                            <div class="single-curses-contert">
                                <div class="details-img-bxo">
                                <h2 style="color:white">Course Picture<input class="form-control" type="file" id="formFile"  name="coursePicture"></h2>
                                <br>
                                </div>
                                <h2 style="color:white">Name: <input type="text" name="courseName"></h2>
                                <div class="review-option ">
                                    <div class="teacher_fee single_items m-2 ">
                                        <h4 class="sub-header-course">Price: EGP <input type="text" name="coursePrice" onkeypress="return onlyNumberKey(event)"/></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                
<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="courses_details">
                    <div class="courses_tab_wrapper">  
                        <div class="courses_details_nav_tabs">     
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab">Curricularm</a></li>
                            </ul>
                        </div>   
                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                <textarea name="courseDescription" cols="80" rows="10"></textarea>
                                <h3>What Will I Learn? <span>:</span></h3>
                                <textarea name="whatWillILearn" cols="80" rows="10"></textarea>                            
                                <h3>Learning Outcomes <span>:</span></h3>
                                <textarea name="learningOutcomes" cols="80" rows="10"></textarea> 
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        <div class="panel-group" id="accordion">
                                            <div class="text-center mx-auto">
                                                <button type="button" style="background-color: #ffc107; color: white; border: none; padding: 15px;" id="add_lesson_btn">Add Lesson</button>
                                            </div>
                                        </div> <!-- .curriculum-section-text END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> <!--End Blog Siderbar Left-->


            <div class="col-12 col-sm-12 col-md-5 col-lg-5 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Courses Features</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <li><a href="#">Requirements </a>
                                <input type="text" name="courseRequirements" size="16"/>
                                <li><a href="#">Duration</a>
                                <input type="text" name="courseDuration" onkeypress="return onlyNumberKey(event)" maxlength="2" size="2"/>
                                    <select name="duration" id="duration">
                                        <option value="hour">H</option>
                                        <option value="week">W</option>
                                        <option value="month">M</option>
                                    </select>
                                </li>
                                <li><a href="#">Certificate</a>
                                    <select name="certificate" id="certificate">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select></li>                                
                                <li><a href="#">Language</a>
                                    <select name="language" id="language">
                                        <option value="english">English</option>
                                        <option value="arabic">Arabic</option>
                                    </select></li>   
                                <li><a href="#">Skills</a>
                                    <select name="skills" id="skills">
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                </li>
                                <li><a href="#">Category</a>
                                    <select name="courseCategory" id="courseCategory">
                                    @foreach($categories as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                    </select>
                                </li>   
                            </ul>
                        </div>
                        <img src="{{asset('img/testimonial_2_shpe_2.png')}}" alt="" class="courses_feaures_shpe">
                    </div>  
            </div> <!-- End Right Sidebar-->
            
        </div>
    </div>
    <div class="text-center mx-auto">
        <input style="background-color: #ffc107; color: white; border: none; padding: 15px;" type="submit" value="Submit For Approval" name="submit">
    </div>
</form>
</section><!-- ./ End  Blog Wrapper-->
<script>
    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    
    var counter = 1;
    $('#add_lesson_btn').click(function(event) {
        var lesson = 
        '<div class="panel panel-default">'+
        '<div class="panel-heading">'+
        '<h4 class="panel-title">'+
        '<a data-toggle="collapse" data-parent="#accordion" href="#collapse'+counter+'" class="collapsed">'+
        'Lesson Name: <input type="text" name="lesson'+counter+'"Name/> </a>'+
        '</h4>'+
        '</div>'+
        '<div id="collapse'+counter+'" class="panel-collapse collapse">'+
        '<div class="panel-body">'+
        '<textarea name="lesson '+counter+'Body" cols="80" rows="10"></textarea>'+
        '</div>'+
        '</div>'+
        '<button type="button" style="background-color: red; color: white; border: none;" id="delete_lesson_btn">Delete Lesson</button>';
        '</div>'+
        $('#accordion').append(lesson);
        counter++;
    });

    $(document).on('click', '#delete_lesson_btn', function(){
        $(this).closest("div").remove();
        counter--;
    });

</script>

</body>
</html>
@endsection
