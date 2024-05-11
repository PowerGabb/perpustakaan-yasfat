@extends('layouts.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Pinjamkan Buku</h6>
        </div>
        <div class="card-body">
            <form action="/rents-back" method="POST">
                @csrf

                <div class="form-group mb-3">
                    
                    <label for="title" class="form-label">Nama Siswa Dan Buku Di Pinjam: </label>
                    <select class="users form-control" name="id">
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->user->name }} - {{ $item->book->title }}</option>
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
                    <button type="submit" class="btn btn-primary">Sudah Di Kembalikan</button>
                </div>
            </form>
        </div>


    </div>
@endsection
