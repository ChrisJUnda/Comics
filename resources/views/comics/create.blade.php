@extends('layouts.app')
@section('main')
    <div class="container text-center">
        <div class="row">
            <div class="col text-start py-4">
                <h1>
                    Crea un fumetto
                </h1>
            </div>
            <div class="col-12 text-start">
                <form action="{{ route('comics.store') }}" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nome Fumetto</label>
                        <input type="text" class="form-control" placeholder="Inserisci il nome del fumetto" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la descrizione</label>
                        <textarea class="form-control" placeholder="Inserisci la descrizione" name="description" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci l'immagine URL</label>
                        <input type="text" class="form-control" placeholder="Inserisci l'immagine" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci il prezzo</label>
                        <input type="number" class="form-control" placeholder="Inserisci il prezzo" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la serie</label>
                        <input type="text" class="form-control" placeholder="Inserisci la serie" name="series">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la data di uscita</label>
                        <input type="text" class="form-control" placeholder="Inserisci la data di uscita"
                            name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la tipologia di libro</label>
                        <input type="text" class="form-control" placeholder="Inserisci la tipologia di libro"
                            name="type">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci gli artisti</label>
                        <input type="text" class="form-control" placeholder="Inserisci gli artisti" name="artists">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci gli scrittori</label>
                        <input type="text" class="form-control" placeholder="Inserisci gli scrittori" name="writers">
                    </div>
                    <button class="btn btn-primary">
                        Crea Fumetto
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
