@extends('layouts.app')


@section('content')
<!--style-->
<link href="{{asset('css/uploadContentForm.css')}}" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">

  <div class="py-20 bg-gray-300 px-2">
    <div class="w-75 mx-auto bg-white rounded-lg overflow-hidden">
        <div class="md:flex">
            <div class="w-full">
                <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-1000">Write Article</span> </div>
                <div class="p-4">
                    <form method="post" action="submitArticle">
                        @csrf
                    <div class="mb-2 w-25 mx-auto"> <span class="text-sm">Article Title</span> <input required type="text"name='title' class="h-12 px-3 w-full border-gray-200 border rounded focus:outline-none focus:border-gray-300"> </div>
                    <div class="mb-2">
                            <input type="hidden" name='currentUserID' value="{{ Auth::guard('contentCreator')->user()->id }}">
                            <div class="input-group hdtuto control-group lst increment" >
                                <textarea required style="height: 500px;"name="article" class="form-control" rows="40" cols="5"></textarea>
                            </div>
                            <div class="w-25 m-5 text-center mx-auto">
                                <button class="w-full h-12 text-lg w-32 rounded text-white" style="background-color: #ffc107">Submit for approval</button> 
                               </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/radialIndicator/1.4.0/radialIndicator.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
@endsection
