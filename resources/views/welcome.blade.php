@extends('layout/base')

@section('title')
    Home
@endsection

@section('main')
    <main>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Entity</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><a href="{{ route('comics.index') }}">Comics</a></td>
                        <td><a href="{{ route('comics.create') }}">New</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
