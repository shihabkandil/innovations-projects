@extends('layouts.app')

<title>Categories</title>

@section('content')
<?php use App\Http\Controllers\FirestorageController;?>
<br>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="4s">
            <h2 class="section-title bg-white text-center px-3">{{ __('Categories')}}</h2>
        </div>
    </div>
</div>
<div class="row g-4 justify-content-center">
@foreach($categories as $data)
    <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
            <a href="Categories/{{$data->id}}">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="<?php echo FirestorageController::fetch('Categories/',$data->picture)?>" alt="{{$data->name}}">
                </div>
                <div class="text-center p-4 pb-2">
                    <h5 class="mb-4">{{$data->name}}</h5>
                </div>
            </a>
        </div>
    </div>
@endforeach
</div>


@endsection