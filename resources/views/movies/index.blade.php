@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1>Staff Picks</h1>
            <ul class="col-md-12 text-left">
                @foreach($movies as $movie)
                    <li>{{ $movie->title }}, released in {{ $movie->year }}</li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
