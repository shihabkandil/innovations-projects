<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{asset('css/styles-admin.css')}}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>
    
    @include('layouts.inc.admin-navbar')


    <div id="layoutSidenav">
     @include('layouts.inc.admin-sidebar')

         <div id="layoutSidenav_content">
                 <main>
                          @yield('content')
                </main>

                @include('layouts.inc.admin-footer')
         </div>
         
    </div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}" crossorigin="anonymous"></script>
  
</body>

</html>