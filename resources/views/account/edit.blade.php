@extends('layouts.main')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">Detail User</div>
            <div class="card-body">
                <form action="/profile" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Lengkap:</label>
                        <input type="text" name="name" class="form-control" value="{{ $profile->name }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">NISN:</label>
                        <input type="text" name="nisn" class="form-control" value="{{ $profile->nisn }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Kelas:</label>
                        <input type="text" name="class" class="form-control" value="{{ $profile->class }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control" value="{{ $profile->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
