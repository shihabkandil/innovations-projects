@extends('layouts.app')


@section('content')
<!--style-->
<link href="{{asset('css/uploadContentForm.css')}}" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
    

  <div class="py-20 h-screen bg-gray-300 px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full">
                <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-600">Uploading Content</span> </div>
                <div class="p-3">
                    <div class="mb-2"> <span class="text-sm">Title</span> <input type="text" class="h-12 px-3 w-full border-gray-200 border rounded focus:outline-none focus:border-gray-300"> </div>
                    <div class="mb-2"> <span>Attachments Type</span>
                        <select class="form-select h-12 p-2 w-50 border-gray-200 border rounded focus:outline-none focus:border-gray-300">
                            <option value="1" selected>Courses Content</option>
                            <option value="2">Articles</option>
                          </select>
                        <div class="relative m-3 h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                            <div class="absolute">
                                <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                            </div> <input multiple type="file" class="h-full w-full opacity-0" name="">
                        </div>
                       </div>
                    <div class="mx-5 text-center pb-3"> <button class="w-full h-12 text-lg w-32 rounded text-white" style="background-color: #ffc107">Create</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
@endsection