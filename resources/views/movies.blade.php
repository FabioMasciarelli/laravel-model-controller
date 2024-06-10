@extends('layouts.app')

@section('content')
    <h2>Movies</h2>

    @foreach ($movies as $movie)
        <div class="card">
            <div>
                <img src="{{ $movie->image }}" alt="">
            </div>
            <div>
                <h3>{{ $movie->title }}</h3>
                <h6>{{$movie->original_title }}</h6>
                <h6>{{ $movie->nationality }}</h6>
                <h6>{{ $movie->vote }}</h6>
            </div>
        </div>
    @endforeach
@endsection
