@extends('layout/base')

@section('title')
    Insert
@endsection

@section('main')
    <main>
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                        value="{{ old('sale_date') }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger my-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </main>
@endsection
