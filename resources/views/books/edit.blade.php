@extends('layouts.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Edit Book</h6>
        </div>
        <div class="card-body">
            <form action="/books/{{ $book->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                    @error('title')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="author_id" class="form-label">Author Name: </label>
                    <select name="author_id" id="" class="form-control">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="publisher_id" class="form-label">Publisher Name: </label>
                    <select name="publisher_id" id="" class="form-control">
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}" {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>
                                {{ $publisher->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('publisher_id')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="rak_id" class="form-label">Rak Name: </label>
                    <select name="rak_id" id="" class="form-control">
                        @foreach ($raks as $rak)
                            <option value="{{ $rak->id }}" {{ $book->rak_id == $rak->id ? 'selected' : '' }}>
                                {{ $rak->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('rak_id')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="publication_year" class="form-label">Publication Year: </label>
                    <input type="date" name="publication_year" class="form-control" value="{{ $book->publication_year }}">
                    @error('publication_year')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="categories" class="form-label">Categories: </label>
                    <select class="categories form-control select2" name="categories[]" multiple="multiple">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ in_array($category->id, $book->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('categories')
                        <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label for="jumlah" class="form-label">Stock: </label>
                    <input type="number" name="jumlah" class="form-control" value="{{ $book->jumlah }}">
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
                    <textarea rows="5" cols="5" type="text" name="description" class="form-control">{{ $book->description }}</textarea>
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
