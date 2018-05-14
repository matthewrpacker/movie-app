@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1>Staff Picks</h1>
            <ul class="col-md-12 text-left">
                @foreach($movies as $movie)
                    <li>
                        {{ title_case($movie->title) }},
                        released in {{ $movie->year }}
                        @if($movie->yearsSince($movie->year) > 0)
                            ({{ $movie->determineMessage($movie->year) }})
                        @endif
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
