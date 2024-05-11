@extends('layouts.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Add Book</h6>
        </div>
        <div class="card-body">
            <form action="/books" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Author Name: </label>
                    <select name="author_id" id="" class="form-control">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="rak" class="form-label">Publisher Name: </label>
                    <select name="publisher_id" id="" class="form-control">
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                        @endforeach
                    </select>
                    @error('publisher_id')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="rak" class="form-label">Rak Name: </label>
                    <select name="rak_id" id="" class="form-control">
                        @foreach ($raks as $rak)
                            <option value="{{ $rak->id }}">{{ $rak->name }}</option>
                        @endforeach
                    </select>
                    @error('rak_id')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="publication_year" class="form-label">Publication Year: </label>
                    <input type="date" name="publication_year" class="form-control">
                    @error('publication_year')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="publication_year" class="form-label">Categories </label>
                    <select class="categories form-control select2" name="categories[]" multiple="multiple">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                      </select>
                    @error('categories')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="jumlah" class="form-label">Stok: </label>
                    <input type="number" name="jumlah" class="form-control">
                    @error('jumlah')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="cover" class="form-label">Cover Image: </label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description: </label>
                    <textarea rows="5" cols="5" type="text" name="description" class="form-control"></textarea>
                    @error('description')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
