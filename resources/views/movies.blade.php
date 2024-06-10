@extends('layouts.app')

@section('content')
<h2 class="">Movies</h2>
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
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection