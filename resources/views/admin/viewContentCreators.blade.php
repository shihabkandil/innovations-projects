@extends('layouts.master')

<title>View Content Creators</title>


@section('content')
<?php use App\Http\Controllers\FirestorageController;?>
<br>
<div class="container">
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
@foreach($contentCreators as $data)
            <div class="card">
                <div class="card-body">
                    <img src='img/default.jpg' width="70px" style="border-radius: 50%; margin-bottom: 5px;">
                    <h5 class='text-primary'>{{$data->name}}</h5>
                    <h6>ID: {{$data->id}}</h5>
                    <h6>Email: {{$data->email}}</h6>
                    <h6><i class="fa-solid fa-file-pdf"></i> <a href='<?php echo FirestorageController::fetch('ContentCreatorsContent/CV/',$data->cv)?>'>CV</a></h6>
                    <h6>About:</h6>
                </div>
            </div>
        <br>      
@endforeach
        </div>
	</div>
</div>


@endsection