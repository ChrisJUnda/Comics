@extends('layouts.app')
@section('main')
    <div class="container text-center">
        <div class="row">
            <div class="col text-start py-4">
                <h1>
                    Modifica Fumetto {{ $comic->title }}
                </h1>
                <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-primary mt-2">Torna alla lista di fumetti</a>
            </div>
            <div class="col-12 text-start">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nome Fumetto</label>
                        <input type="text" class="form-control" placeholder="Inserisci il nome del fumetto"
                            name="title" value="{{ old('title', $comic->title) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la descrizione</label>
                        <textarea class="form-control" placeholder="Inserisci la descrizione" name="description" rows="5"
                            value="{{ old('description', $comic->description) }}"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci l'immagine URL</label>
                        <input type="text" class="form-control" placeholder="Inserisci l'immagine" name="thumb"
                            value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci il prezzo</label>
                        <input type="number" class="form-control" placeholder="Inserisci il prezzo" name="price"
                            value="{{ old('price', $comic->price) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la serie</label>
                        <input type="text" class="form-control" placeholder="Inserisci la serie" name="series"
                            value="{{ old('series', $comic->series) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la data di uscita</label>
                        <input type="text" class="form-control" placeholder="Inserisci la data di uscita"
                            name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la tipologia di libro</label>
                        <select name="type" class="form-select" value="{{ old('type', $comic->type) }}">
                            <option>
                                Comic book
                            </option>
                            <option>
                                graphic novel
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci gli artisti</label>
                        <input type="text" class="form-control" placeholder="Inserisci gli artisti" name="artists"
                            value="{{ old('artists', $comic->artists) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci gli scrittori</label>
                        <input type="text" class="form-control" placeholder="Inserisci gli scrittori" name="writers"
                            value="{{ old('writers', $comic->writers) }}">
                    </div>
                    <button class="btn btn-primary">
                        Modifica Fumetto
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
