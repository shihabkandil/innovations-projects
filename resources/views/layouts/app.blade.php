<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>


<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-warning"><i class="fa fa-book me-3"></i>{{ __('Innovations Projects')}}</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/home" class="nav-item nav-link">{{ __('Home') }}</a>
                <a href="/news" class="nav-item nav-link">{{ __('News') }}</a>
                <a href="/articles" class="nav-item nav-link">{{ __('Articles') }}</a>
                <a href="/about" class="nav-item nav-link">{{ __('About') }}</a>
                <a href="/contact" class="nav-item nav-link">{{ __('Contact') }}</a>

                @auth('contentCreator')
                <a href="/contentCreator/upload" class="nav-item nav-link" style="color:red; font-weight:bold;" >{{ __('Upload Content') }}</a>
                @endauth

                @auth('student')
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('Browse Courses') }}</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a href="/categories" class="dropdown-item">{{ __('Browse Courses') }}</a></li>
                            <li><a href="/bundles" class="dropdown-item">{{ __('Bundles') }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="/subscriptions" class="dropdown-item" style="color:red; font-weight:bold;" >{{ __('Subscribe') }}</a></li>
                        </ul>
                    </li>
                </ul>
                @endauth
                
                @if(Auth::guard('student')->check() || Auth::guard('contentCreator')->check())
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu" style="right: 0; left: auto;" aria-labelledby="navbarDropdown">
                            @if(Auth::guard('student')->check())
                            <li><a class="dropdown-item" href="/editProfile/{{Auth::guard('student')->user()->id}}"> Edit Profile </a></li>
                            @endif
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div id="chatBox">
                    <div class="container d-flex justify-content-center">
                        <div class="card mt-5">
                            <div class="d-flex flex-row justify-content-between p-3 adiv text-white"> <span class="pb-3 mx-auto">Live chat</span> </div>
                            <div class="d-flex flex-row p-3"> <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
                                <div class="chat ml-2 p-3">Hello</div>
                            </div>
                            <div class="d-flex flex-row p-3" style="margin-left: auto;">
                                <div class="bg-white mr-2 p-3"><span class="text-muted">Hello</span></div> <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7.png" width="30" height="30">
                            </div>
                            <div class="d-flex flex-row p-3"> <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
                                <div class="chat ml-2 p-3"><span class="text-muted dot">. . .</span></div>
                            </div>
                            <div class="form-group px-3"> <textarea class="form-control" style="resize: none;" rows="5" placeholder="Type your message"></textarea> </div>
                            <button type="button" class="send-button">Send</button>
                        </div>
                    </div>
                </div>
                <button class="close-button" onclick="closeForm()" >Close</button>
                <button class="open-button" onclick="openForm()">Chat</button>
                @endif
                
                @if(!(Auth::guard('contentCreator')->check() || Auth::guard('student')->check()))
                    <a href="/login" id="Login" class="nav-item nav-link">{{ __('Login') }}</a>
                    <a href="/register" id="Join us"class="btn btn-warning py-4 px-lg-5 d-none d-lg-block" style="border-radius:0px;">{{ __('Join us') }}<i class="fa fa-arrow-right ms-3"></i></a>
                @endif
        </div>
      
    </nav>
    <!-- Navbar End -->
    
    <div>
                @yield('content')
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">{{ __('Quick Link') }}</h4>
                    <a class="btn btn-link" href="/about">{{ __('About Us') }}</a>
                    <a class="btn btn-link" href="/contact">{{ __('Contact Us') }}</a>
                    <a class="btn btn-link" href="/privacy-policy">{{ __('Privacy Policy') }}</a>
                    <a class="btn btn-link" href="/terms-conditions">{{ __('Terms & Conditions') }}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">{{ __('Contact') }}</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">{{ __('Innovations Projects') }}</a>, All Right Reserved.
                        
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <div id="chatBox">
        <div class="container d-flex justify-content-center">
            <div class="card mt-5">
                <div class="d-flex flex-row justify-content-between p-3 adiv text-white"> <span class="pb-3 mx-auto">Live chat</span> </div>
                <div class="d-flex flex-row p-3"> <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
                    <div class="chat ml-2 p-3">Hello</div>
                </div>
                <div class="d-flex flex-row p-3" style="margin-left: auto;">
                    <div class="bg-white mr-2 p-3"><span class="text-muted">Hello</span></div> <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7.png" width="30" height="30">
                </div>
                <div class="d-flex flex-row p-3"> <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
                    <div class="chat ml-2 p-3"><span class="text-muted dot">. . .</span></div>
                </div>
                <div class="form-group px-3"> <textarea class="form-control" style="resize: none;" rows="5" placeholder="Type your message"></textarea> </div>
                <button type="button" class="send-button">Send</button>
            </div>
        </div>
    </div>
    <button class="btn btn-primary close-button" onclick="closeForm()">Close</button>
    <button class="btn btn-primary open-button" onclick="openForm()">Chat</button>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}" crossorigin="anonymous"></script>
</body>
<script>
    function openForm() {
        document.getElementById("chatBox").style.display = "block";
        document.getElementsByClassName("open-button")[0].style.display = "none";
        document.getElementsByClassName("close-button")[0].style.display = "block";
    }

    function closeForm() {
        document.getElementById("chatBox").style.display = "none";
        document.getElementsByClassName("open-button")[0].style.display = "block";
        document.getElementsByClassName("close-button")[0].style.display = "none";
    }
</script>
</html>

