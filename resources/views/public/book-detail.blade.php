@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 col">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Book Detail</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-lg-4 col-12 mb-4">
                            @if ($book->cover)
                                <img src="{{ asset('storage/cover/' . $book->cover) }}" alt="image" class="img-fluid">
                            @else
                                <img src="{{ asset('default.png') }}" alt="image">
                            @endif
                        </div>
                        <div class="col col-lg-8 col-12">
                            <h3>{{ $book->title }}</h3>
                            @foreach ($book->categories as $category)
                                <small class="text-bold ">Category: {{ $category->title }}</small>
                            @endforeach
                            <p class="text-muted">Author: {{ $book->author->name }}</p>
                            <p>{{ $book->description }}</p>

                            <a href="/pinjam/buku/{{ $book->id }}" class="btn btn-primary" >Ajukan Pinjam</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection