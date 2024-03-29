@extends('layouts.app')

@section('content')
    <main>

        <div class="comics-wrapper">
            <div class="container">
                <div class="row justify-between">
                    <div class="col-12">
                        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un fumetto</a>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-between">
                        @foreach ($comics as $comic)
                            <div class="card m-2" style="width:18rem;">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of
                                        the card's
                                        content.</p>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Guarda i
                                        dettagli</a>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">cancella</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
