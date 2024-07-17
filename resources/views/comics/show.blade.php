@extends('layouts.app')
@section('main')
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}" class="img-fluid rounded-start">

                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-start">
                                <p class="mb-4">
                                    <strong>Titolo fumetto:</strong>
                                    {{ $comics->title }}
                                </p>
                                <p>
                                    <strong>Trama:</strong>
                                    "{{ $comics->description }}"
                                </p>
                                <p>
                                    <strong>Prezzo:</strong>
                                    {{ $comics->price }}
                                </p>
                                <p>
                                    <strong>Serie:</strong>
                                    {{ $comics->series }}
                                </p>
                                <p>
                                    <strong>Data Pubblicazione:</strong>
                                    {{ $comics->sale_date }}
                                </p>
                                <p>
                                    <strong>Tipologia di libro:</strong>
                                    {{ $comics->type }}
                                </p>
                                <p>
                                    <strong>Artisti:</strong>
                                    {{ $comics->artists }}
                                </p>
                                <p>
                                    <strong>Scrittori:</strong>
                                    {{ $comics->writers }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary ">
                    <a href="{{ route('comics.index') }}" class="nav-link text-white">
                        Torna alla Lista di Fumetti
                    </a>
                </button>
                <button type="button" class="btn btn-primary ">
                    <a href="{{ route('comics.edit', $comics->id) }}" class="nav-link text-white">Modifica Fumetto</a>
                </button>


            </div>
        </div>
    </div>
@endsection
