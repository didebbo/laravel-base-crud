@extends('layout/base')

@section('title')
    Comic | {{ $comic['title'] }}
@endsection

@section('main')
    <main>
        <div class="container">
            <table class="table">
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
            </table>
        </div>

    </main>
@endsection
