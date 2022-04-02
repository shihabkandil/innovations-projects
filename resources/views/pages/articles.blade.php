@extends('layouts.app')
@section('content')

<title>Bundles</title>

    <head>
        <meta charset="utf-8">
        <title>{{ __('Innovations Projects')}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <style>
            .title{
                color: white;
                font-size: 20px;
            }
            .title:hover{
                color: gray;
            }
        </style>
    </head>
    <br>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="4s">
                <h2 class="section-title bg-white text-center px-3">{{ __('Articles Section')}}</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                <div class="card-body" style="background-color: #ffc107;">
                <a href="#" class="title"><b>Shedding light on retail environments</b></a>
                </div>
                <div class="card-body">
                    <p>
                    Over the past several years, physical retail outlets have seen a noticeable decline in shoppers, as digital shopping has provided a newer and less costly shopping alternative for consumers. Online digital shopping provides immediate product information but lacks the experience of a physical product. Newer immersive digital shopping environments bring together digital product information with physical products. In this paper we present our early work in exploring the applicability and interaction space of spatially aware multi-surface environments in a retail space. We give an overview on our prototype designed with an industry partner, followed by early feedback on the role of multi-surface environments and interactions in the retail space.                    </p> 
                    </p> 
                    <hr>
                    <p style="float: right;"><b>by <a href="#">Tracy Hardwood</a></b></p>
                </div>
            </div>
        </div>
        <br>
    </div>

    <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
            <div class="card-body" style="background-color: #ffc107;">
            <a href="#" class="title"><b>Exploring Multi-Surface Interactions in Retail Environments</b></a>
            </div>
            <div class="card-body" >
                <div class="card-body" >
                    <p>
                    Over the past several years, physical retail outlets have seen a noticeable decline in shoppers, as digital shopping has provided a newer and less costly shopping alternative for consumers. Online digital shopping provides immediate product information but lacks the experience of a physical product. Newer immersive digital shopping environments bring together digital product information with physical products. In this paper we present our early work in exploring the applicability and interaction space of spatially aware multi-surface environments in a retail space. We give an overview on our prototype designed with an industry partner, followed by early feedback on the role of multi-surface environments and interactions in the retail space.                    </p> 
                    <hr>
                    <p style="float: right;"><b>by <a href="#">Sydney Pratte</a></b></p>
                </div>
            </div>
        </div>
        <br>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>

@endsection