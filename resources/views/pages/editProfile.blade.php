@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>@section('title') Edit-Profile page @endsection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
    use App\Models\Student;
    use App\Http\Controllers\FirestorageController;
    $student = Student::getStudent(Auth::guard('student')->user()->id);
?>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src=<?php echo FirestorageController::fetch('Students/',$student[0]->PP)?>>
				</div>
				<h5 class="user-name text-warning"></h5>
				<h6 class="user-email">{{$student[0]->email}}</h6>
			</div>
			<div class="about">
				<h5 class="text-warning">About</h5>
				<p>{{$student[0]->BIO}}</p>
			</div>
		</div>
	</div>
</div>
</div>


<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-warning">Personal Details</h6>
			</div>
			<form action={{ route('update') }} method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="{{$student[0]->id}}">
			@csrf
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$student[0]->name}}"required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="eMail" placeholder="Enter email" name="email" value="{{$student[0]->email}}" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="BIO">Bio</label>
					<input type="text" class="form-control" id="bio" placeholder="Enter Bio" name="bio" value="{{$student[0]->BIO}}" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{$student[0]->address}}" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="{{$student[0]->city}}" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="state">State</label>
					<input type="text" class="form-control" id="state" placeholder="Enter State" name="state" value="{{$student[0]->state}}" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zip">ZIP</label>
					<input type="text" class="form-control" id="zip" placeholder="Enter ZIP" name="zip" value="{{$student[0]->zip_code}}" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="profilePicture">Profile Picture</label>
					<input type="file" class="form-control" id="profilePicture" name="profilePicture"required>
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<a href="/">
					<button  type="button" class="btn btn-secondary" style="float: right; margin: 10px;">Cancel</button>
					</a>
					<button type="submit" id="submit" name="submit" class="btn btn-warning" style="float: right; margin: 10px;">Update</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</div>
</div>
</div>

<style type="text/css">
body {
    margin: 0;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    margin-top: 20px;
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>
@endsection