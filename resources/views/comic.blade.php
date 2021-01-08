@extends('templates.main')

@section("content")
<div class="comic-page">
    <div class="hero" style="background-image: url({{ $comic['image-hero'] }})">
        <div class="container container-hero">
            <div class="poster">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="container info">
        <div class="description">
            <h2>{{ $comic['title'] }}</h2>
            <div class="price">
                U.S. Price: <span>${{ $comic['price'] }}</span>
            </div>
            <div class="text">{!! $comic['body'] !!}</div>

        </div>
        <div class="adv">
            <h4>ADVERTISEMENT</h4>
            <img src="{{ asset('images/adv.png') }}" alt="">
        </div>
    </div>

</div>

@endsection
