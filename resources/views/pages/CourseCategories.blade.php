@extends('layouts.app')

<title>Category {{$id}} Courses</title>

@section('content')

    @foreach($courses as $course)
    
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
                <a href="/course/{{$course->id}}"><img class="img-fluid" src={{ asset('img/'.$course->CoursePicture)}}></a>
            </div>
            <div class="text-center p-4 pb-0">
                <h5 class="mb-4">{{$course->CourseName}}</h5>
            </div>
        </div>
    </div>
     
    @endforeach

    


@endsection