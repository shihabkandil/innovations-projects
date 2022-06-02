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
     

     @foreach($id as $Courses)[
        <form method = 'POST' action = "{{ route('updateCourse') }}">
            
<tr>
<input type="hidden" name="courseID" value="{{$Courses['id']}}">
    <td>{{$Courses['CourseID']}}</td>
    <td>{{$Courses['CourseName']}}</td>
    <td>{{$Courses['CoursePrice']}}</td>

    <td><button type = 'submit'> Accept
     </button></td>

</tr>
     </form>
@endforeach
     
</table>


@endsection