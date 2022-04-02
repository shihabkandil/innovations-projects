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
    @foreach($news as $selectedNews)
        <figure class="snip grid-item">
            <div class="image"><img src={{$selectedNews['urlToImage']}} alt="" /></div>
            <figcaption>
                <h3>{{\Illuminate\Support\Str::limit($selectedNews['title'],50,$end='...')}}</h3>
                <p style="font-size: 14px">{{\Illuminate\Support\Str::limit($selectedNews['description'],120,$end='...')}}</p>
                <h3>{{\Illuminate\Support\Str::limit($selectedNews['author'],30,$end='...')}}</h3>
            </figcaption>
        </figure>
    @endforeach
</section>


@endsection