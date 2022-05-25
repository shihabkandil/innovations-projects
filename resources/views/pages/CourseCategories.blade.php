@extends('layouts.app')

<title>Category {{$id}} Courses</title>

@section('content')
<style>
    body {
     overflow-x: hidden;
    }
</style>
<?php 
    use App\Http\Controllers\FirestorageController;
    use App\Models\ContentCreator;
    ?>
<br>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="4s">
            <h2 class="section-title bg-white text-center px-3">{{ __('Courses')}}</h2>
        </div>
    </div>
</div>
<div class="row g-4 justify-content-center">
@foreach($courses as $data)
    <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
            <a href="/course/{{$data->id}}">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="<?php echo FirestorageController::fetch('Courses/Picture/',$data->CoursePicture)?>" alt="{{$data->CourseName}}">
                </div>
                <div class="text-center p-4 pb-2">
                    <h4 class="mb-4">{{$data->CourseName}}</h4>
                    <h6 class="mb-4">EGP {{$data->CoursePrice}}</h6>
                    <h6>Instructor: <?php echo ContentCreator::getContentCreator($data->CourseInstructorID)[0]->name; ?></h6>
                </div>
            </a>
        </div>
    </div>
@endforeach
</div>

@endsection