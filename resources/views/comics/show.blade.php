@extends('layout/base')

@section('title')
    Comic | {{ $comic['title'] }}
@endsection

@section('main')
    <main>

        <div class="container">
            <div class="card mx-auto" style="width: 40em;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="..."
                    style="height: 10em; object-fit: contain; object-position: left; margin: 1em;">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">{{ $comic['description'] }}</p>
                    <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('comics.destroy', $comic['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
