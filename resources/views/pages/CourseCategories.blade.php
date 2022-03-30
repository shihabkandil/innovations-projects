@extends('layouts.app')

<title>Category {{$id}} Courses</title>

@section('content')

    @foreach($courses as $course)
         
               
     <p>{{ $course->CourseName }}</p>
                          
     
    @endforeach

    


@endsection