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
                        <form method="post" action="/uploadFile" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group hdtuto control-group lst increment" >
                                <input type="file" name="uploadFiles[]" class="form-control" multiple>
                            </div>
                            <div class="m-5 text-center">
                                <button class="w-full h-12 text-lg w-32 rounded text-white" style="background-color: #ffc107">Create</button> 
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


<script>

$(document).ready(function(){

    //file upload example
    var container = $('#indicatorContainerWrap'),
    msgHolder = container.find('.rad-cntnt'),
    containerProg = container.radialIndicator({
    radius: 100,
    percentage: true,
    displayNumber: false
    }).data('radialIndicator');


    container.on({
    'dragenter': function (e) {
    msgHolder.html("Drop here");
    },
    'dragleave': function (e) {
    msgHolder.html("Click / Drop file to select.");
    },
    'drop': function (e) {
    e.preventDefault();
    handleFileUpload(e.originalEvent.dataTransfer.files);
    }
    });

    $('#prgFileSelector').on('change', function () {
    handleFileUpload(this.files);
    });

    function handleFileUpload(files) {
    msgHolder.hide();
    containerProg.option('displayNumber', true);

    var file = files[0],
    fd = new FormData();

    fd.append('file', file);


    $.ajax({
    url: 'service/upload.php',
    type: 'POST',
    data: fd,
    processData: false,
    contentType: false,
    success: function () {
    containerProg.option('displayNumber', false);
    msgHolder.show().html('File upload done.');
    },
    xhr: function () {
    var xhr = new window.XMLHttpRequest();
    //Upload progress
    xhr.upload.addEventListener("progress", function (e) {
    if (e.lengthComputable) {
    var percentComplete = (e.loaded || e.position) * 100 / e.total;
    //Do something with upload progress
    console.log(percentComplete);
    containerProg.animate(percentComplete);
    }
    }, false);

    return xhr;
    }
    });

    }


    });

</script>