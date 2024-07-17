@extends('layouts.app')
@section('main')
    <div class="container text-center">
        <div class="row">
            <div class="col text-start py-4">
                <h1>
                    Crea un fumetto
                </h1>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 text-start">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome Fumetto</label>
                        <input type="text" class="form-control @if ($errors->get('title')) is-invalid @endif"
                            placeholder="Inserisci il nome del fumetto" name="title" value="{{ old('title') }}">
                        @if ($errors->get('title'))
                            @foreach ($errors->get('title') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la descrizione</label>
                        <textarea class="form-control @if ($errors->get('description')) is-invalid @endif"
                            placeholder="Inserisci la descrizione" name="description" rows="5" value="{{ old('description') }}"></textarea>

                        @if ($errors->get('description'))
                            @foreach ($errors->get('description') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci l'immagine URL</label>
                        <input type="text" class="form-control @if ($errors->get('thumb')) is-invalid @endif"
                            placeholder="Inserisci l'immagine" name="thumb" value="{{ old('thumb') }}">
                        @if ($errors->get('thumb'))
                            @foreach ($errors->get('thumb') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci il prezzo</label>
                        <input type="number" class="form-control @if ($errors->get('price')) is-invalid @endif"
                            placeholder="Inserisci il prezzo" name="price" value="{{ old('price') }}">
                        @if ($errors->get('price'))
                            @foreach ($errors->get('price') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la serie</label>
                        <input type="text" class="form-control @if ($errors->get('series')) is-invalid @endif"
                            placeholder="Inserisci la serie" name="series" value="{{ old('series') }}">
                        @if ($errors->get('series'))
                            @foreach ($errors->get('series') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la data di uscita</label>
                        <input type="text" class="form-control @if ($errors->get('sale_date')) is-invalid @endif"
                            placeholder="Inserisci la data di uscita" name="sale_date" value="{{ old('sale_date') }}">
                        @if ($errors->get('sale_date'))
                            @foreach ($errors->get('sale_date') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la tipologia di libro</label>
                        <select name="type" class="form-select " value="{{ old('type') }}">
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
                        <input type="text" class="form-control @if ($errors->get('artists')) is-invalid @endif"
                            placeholder="Inserisci gli artisti" name="artists" value="{{ old('artists') }}">
                        @if ($errors->get('artists'))
                            @foreach ($errors->get('artists') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci gli scrittori</label>
                        <input type="text" class="form-control @if ($errors->get('writers')) is-invalid @endif"
                            placeholder="Inserisci gli scrittori" name="writers" value="{{ old('writers') }}">
                        @if ($errors->get('writers'))
                            @foreach ($errors->get('writers') as $message)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button class="btn btn-primary">
                        Crea Fumetto
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
