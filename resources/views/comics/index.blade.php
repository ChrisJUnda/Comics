@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-3">
                <h1>
                    Tutti i fumetti
                </h1>
            </div>
            @foreach ($comics as $comic)
                <div class="col-2 g-3">
                    <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <a class="nav-link text-dark" href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                    {{-- <div class="card"> --}}
                    {{-- <img src="{{ $comic->th umb }}" class="card-img-top" alt="{{ $comic->title }}"> --}}
                    {{-- <div class="card-body">
                            <p class="card-text"></p>
                        </div> --}}
                    {{-- </div> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
