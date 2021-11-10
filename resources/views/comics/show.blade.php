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
                    <a href="#" class="btn btn-primary">Edit</a>
                </div>
            </div>
            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $comic['id'] }}</th>
                        <td>{{ $comic['title'] }}</td>
                        <td>{{ $comic['description'] }}</td>
                        <td>{{ $comic['thumb'] }}</td>
                        <td>{{ $comic['price'] }}</td>
                        <td>{{ $comic['series'] }}</td>
                        <td>{{ $comic['sale_date'] }}</td>
                        <td>{{ $comic['type'] }}</td>
                    </tr>
                </tbody>
            </table> --}}
        </div>

    </main>
@endsection
