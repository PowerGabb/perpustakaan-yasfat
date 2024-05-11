@extends('layouts.main')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">{{ $user->name }}</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">NISN:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->nisn }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Kelas:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->class }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->email }}" readonly>
                </div>

                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit Users</a>
            </div>
        </div>
    </div>
@endsection