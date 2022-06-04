@extends('layouts.master')
@extends('layouts.master')
@section('content')

<table class="table">
<thead style ="background-color:grey;">
     <tr style="color: white;">
          <td>ID</td>
          <td>Name</td>
          <td>Price</td>
          <td>Pending</td>
     </tr>
</thead>   
@foreach($id as $Courses)
     <form method = 'POST' action = "{{ route('updateCourse') }}">
     @csrf
          <tr>
          <input type="hidden" name="courseID" value="{{$Courses['id']}}">
          <td>{{$Courses['id']}}</td>
          <td><a href="/course/{{$Courses['id']}}" class="btn btn-secondary">{{$Courses['CourseName']}}</a></td>
          <td>{{$Courses['CoursePrice']}}</td>
          <td><button type = 'submit' class='btn btn-secondary'> Accept
          </button></td>
          </tr>
     </form>
@endforeach 
</table>


@endsection