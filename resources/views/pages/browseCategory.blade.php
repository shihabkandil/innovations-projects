@extends('layouts.app')

<title>Catigories</title>

@section('content')

        @foreach ($categories as $category)
         <div class="course-item bg-light w-25 d-flex">
                          <a href="Catigories/{{$category->id}}">
                            <div class="position-relative overflow-hidden ">
                                    <img class="img-fluid" src="img/{{$category->picture}}" alt="">
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h5 class="mb-4">{{$category->name}}</h5>
                            </div>
                          </a>
         </div>
        @endforeach

@endsection