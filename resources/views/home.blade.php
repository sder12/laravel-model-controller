@extends('layouts.app')

@section('content')
    <section>
        <h1>Questa è la homepage</h1>
        @foreach ($movies as $movie)
            <h2>{{$movie->title}}</h2>
        @endforeach
    </section>
@endsection