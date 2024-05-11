@extends('layouts.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Pinjamkan Buku</h6>
        </div>
        <div class="card-body">
            <form action="/rents" method="POST">
                @csrf

                <div class="form-group mb-3">
                    @if (session()->has('success'))
                        <p class="text-success pt-2">{{ session('success') }}</p>
                    @endif
                    <label for="title" class="form-label">Nama Siswa: </label>
                    <select class="users form-control" name="user_id">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }} - {{ $student->class }}</option>
                        @endforeach
                    </select>
                    @error('title')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror

                    @if (session()->has('success'))
                        <p class="text-success pt-2">{{ session('success') }}</p>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Judul Buku: </label>
                    <select class="users form-control" name="book_id">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }} - {{ $book->author->name }}</option>
                        @endforeach
                    </select>
                    @error('title')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror

                    @if (session()->has('success'))
                        <p class="text-success pt-2">{{ session('success') }}</p>
                    @endif
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
