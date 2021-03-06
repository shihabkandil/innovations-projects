@extends('layouts.master')
<style> body{
overflow-x: hidden;
}</style>

@section('content')
<div class="row g-4 justify-content-center">
    <div class="col-lg-4 col-md-6 wow fadeInUp" style="margin-top: 60px;" data-wow-delay="0.5s">
        <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                </div>
            </div>
            <div class="text-center p-4 pb-4">
                <h1 class="mb-0">
                <i class="fa fa-user text-muted me-2"></i>
                </h1>
                <h5 class="mb-4 mt-2">Students: {{$students->count()}}</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" style="margin-top: 60px;" data-wow-delay="0.5s">
        <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                </div>
            </div>
            <div class="text-center p-4 pb-4">
                <h1 class="mb-0">
                <i class="fa fa-user-tie text-muted me-2"></i>
                </h1>
                <h5 class="mb-4 mt-2">Content Creators: {{$contentCreators->count()}}</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" style="margin-top: 60px;" data-wow-delay="0.5s">
        <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                </div>
            </div>
            <div class="text-center p-4 pb-4">
                <h1 class="mb-0">
                    <i class="fa fa-book text-muted me-2"></i>
                </h1>
                <h5 class="mb-4 mt-2">Courses: {{$courses->count()}}</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" style="margin-top: 60px;" data-wow-delay="0.5s">
        <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                </div>
            </div>
            <div class="text-center p-4 pb-4">
                <h1 class="mb-0">
                    <i class="fa fa-file text-muted me-2"></i>
                </h1>
                <h5 class="mb-4 mt-2">Articles: {{$articles->count()}}</h5>
            </div>
        </div>
    </div>
</div>

@endsection