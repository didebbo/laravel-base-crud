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
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
