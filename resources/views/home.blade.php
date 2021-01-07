@extends('templates.main')

@section("content")

    @include('partials.hero')

    <section class="comics">
        <div class="container">
            <div class="comics-list">
                @foreach ($comics as $comic)
                    <a class="box" href="">
                        <img src="{{ $comic['image'] }}" alt="">
                        <h3>{{ $comic['title'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        <button class="btn btn-primary">
            learn more
        </button>
    </section>
    <section class="icon-section">
        <div class="container">
            <ul class="icon">
                <li>
                    <img src="{{ asset('images/digital-comics.png') }}" alt="">
                    <p>
                        digital comics
                    </p>
                </li>
                <li>
                    <img src="{{ asset('images/merchandise.png') }}" alt="">
                    <p>
                        dc merchandise
                    </p>
                </li>
                <li>
                    <img src="{{ asset('images/subscriptions.png') }}" alt="">
                    <p>
                        subscription
                    </p>
                </li>
                <li>
                    <img src="{{ asset('images/shop-locator.png') }}" alt="">
                    <p>
                        comic shop locator
                    </p>
                </li>
                <li>
                    <img src="{{ asset('images/power-visa.svg') }}" alt="">
                    <p>
                        dc power visa
                    </p>
                </li>
            </ul>
        </div>
    </section>
@endsection