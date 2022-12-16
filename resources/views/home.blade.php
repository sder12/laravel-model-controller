@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="text-center my-4">Movies</h1>

        <div class="row row-cols-4">
                @foreach ($movies as $movie)      
                <div class="col g-2 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$movie->image}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="fw-semibold">Original title: {{$movie->original_title}}</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach    
        </div>

    </section>
@endsection