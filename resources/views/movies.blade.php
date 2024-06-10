@extends('layouts.app')

@section('content')
<h1 class="my_title">Movies</h1>
<div class="container">
    <div class="row row-lg-4 d-flex">
        @foreach ($moviesList as $index => $movie)
        <div class="col-lg-4 mb-4
                @if($index == 9)
                    offset-lg-4
                @endif">
            <div class="card" style="width: 18rem;">
                <img src="{{$movie->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">Data d'uscita:{{ $movie->date }}</p>
                    <h4>
                        Voto:
                        @for ($i = 1; $i <= 5; $i++) <i class="fa-solid fa-star{{ $i <= ceil($movie->vote_average / 2) ? 'star-filled' : '' }}"></i>
                            @endfor
                    </h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection