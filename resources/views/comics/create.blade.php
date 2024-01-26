@extends ('layouts.app')
@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" class="form-control" id="title" value="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" name="description" class="form-control" id="description" value="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" name="thumb" class="form-control" id="thumb" value="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" name="price" class="form-control" id="price" value="10.00">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" name="series" class="form-control" id="series" value="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date" value="2023.1.1">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" name="type" class="form-control" id="type" value="type">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
