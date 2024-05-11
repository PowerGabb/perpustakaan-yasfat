@extends('layouts.main')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">{{ $book->name }}</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap:</label>
                    <input type="text" name="name" class="form-control" value="{{ $book->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">NISN:</label>
                    <input type="text" name="name" class="form-control" value="{{ $book->nisn }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Kelas:</label>
                    <input type="text" name="name" class="form-control" value="{{ $book->class }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" name="name" class="form-control" value="{{ $book->email }}" readonly>
                </div>

                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Edit Users</a>
            </div>
        </div>
    </div>
@endsection