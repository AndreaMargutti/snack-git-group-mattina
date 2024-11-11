@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Book Library</h1>
        <div class="row">

            @foreach ($books as $book)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">{{ $book->description }}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
