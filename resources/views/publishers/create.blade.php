@extends('layouts.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Add Publicher</h6>
        </div>
        <div class="card-body">
            <form action="/publishers" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name: </label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
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
