@extends('layout/base')

@section('title')
    Comic | {{ $comic['title'] }}
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want realy delete {{ $comic['title'] }}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <form action="{{ route('comics.destroy', $comic['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <!-- Button trigger modal -->
                        <button type="submit" class="btn btn-danger">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                    <div class="d-flex">
                        <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#exampleModal">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
