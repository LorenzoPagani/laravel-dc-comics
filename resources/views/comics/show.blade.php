@extends('layouts.app')
@section('content')
    <div class="card" style="width:18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->series }}</h6>
            <p class="card-text">{{ $comic->description }}</p>
            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
        </div>
    </div>
@endsection
