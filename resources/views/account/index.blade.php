@extends('layouts.main')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">{{ $profile->name }}</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap:</label>
                    <input type="text" name="name" class="form-control" value="{{ $profile->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">NISN:</label>
                    <input type="text" name="name" class="form-control" value="{{ $profile->nisn }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Kelas:</label>
                    <input type="text" name="name" class="form-control" value="{{ $profile->class }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Email:</label>
                    <input type="text" name="name" class="form-control" value="{{ $profile->email }}" readonly>
                </div>

                <a href="profile/edit" class="btn btn-primary">Edit profiles</a>
            </div>
        </div>
    </div>
@endsection