@extends('layouts.app')

@section('content')

<div class="container-movies">
    <h2>Movies</h2>

    @foreach ($movies as $movie)
        <div class="ms_card">
            <div class="box-img">
                <img src="{{ $movie->image }}" alt="">
            </div>
            <div class="info">
                <h3>{{ $movie->title }}</h3>
                <h6>{{$movie->original_title }}</h6>
                <h6>{{ $movie->nationality }}</h6>
                <h6>{{ $movie->vote }}</h6>
            </div>
        </div>
    @endforeach

</div>
@endsection
