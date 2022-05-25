@extends('layouts.master')

@section('content')


<table class="table">
<thead style ="background-color:#1985E7;">
<tr>
          <td>Course ID</td>
          <td>Name</td>
          <td>Price</td>
          <td>Pending</td>
     </tr>
  </thead>
     

     @foreach($CourseID as $Courses)[
<tr>
    <td>{{$Courses['CourseID']}}</td>
    <td>{{$Courses['CourseName']}}</td>
    <td>{{$Courses['CoursePrice']}}</td>
    <td><button  type="button" class="btn btn-primary">Accept</button></td>
</tr>
@endforeach
</table>


@endsection