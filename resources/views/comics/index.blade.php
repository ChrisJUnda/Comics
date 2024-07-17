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
                <div class="col-2 g-3 ">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top w-100" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <p class="card-text">
                                <a class="nav-link text-dark" href="{{ route('comics.show', $comic->id) }}">
                                    {{ $comic->title }}
                                </a>
                            </p>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary">Elimina</button>
                                {{-- <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Elimina</a> --}}

                            </form>

                        </div>
                    </div>
                    {{-- <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <a class="nav-link text-dark" href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a> --}}
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
