@extends('layouts.app')


@section('content')

<link href="{{ asset('css/news-snip.css')}}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

<section class="mx-auto d-flex flex-wrap " data-masonry='{"itemSelector:".grid-item}'>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="4s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{ __('News Section')}}</h6>
                <h1 class="mb-5">News</h1>
            </div>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
    @foreach($news as $selectedNews)
        <figure class="snip grid-item">
            <div class="image"><img src={{$selectedNews['urlToImage']}} alt="" /></div>
            <a href={{$selectedNews['url']}}></a>
            <figcaption>
                <h3>{{\Illuminate\Support\Str::limit($selectedNews['title'],50,$end='...')}}</h3>
                <p style="font-size: 14px">{{\Illuminate\Support\Str::limit($selectedNews['description'],120,$end='...')}}</p>
                <h3>{{\Illuminate\Support\Str::limit($selectedNews['author'],30,$end='...')}}</h3>
            </figcaption>
        </figure>
    
    @endforeach

    </div>
</section>



@endsection