@extends('templates.main')

@section("content")

    @include('partials.hero')

    <section class="comics">
        <div class="container">
            <div class="comics-list">
                @foreach ($comics as $comic)
                    <div class="box">
                        <img src="{{ $comic['image'] }}" alt="">
                    </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection