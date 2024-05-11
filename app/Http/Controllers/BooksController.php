<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\NoRak;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index()
    {
        $data = Book::with('noRak')->get();

        return view('books.index', compact('data'));
    }

    public function create()
    {

        $authors = Author::all();
        $publishers = Publisher::all();
        $raks = NoRak::all();
        $categories = Categories::all();
        return view('books.create', compact('authors', 'raks', 'publishers', 'categories'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
            'rak_id' => 'required',
            'jumlah' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'publication_year' => 'required',
        ]);


        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/cover', $imgname);
        }

        $data = Book::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id,
            'rak_id' => $request->rak_id,
            'cover' => $imgname,
            'publication_year' => $request->publication_year,
            'description' => $request->description,
            'jumlah' => $request->jumlah,
        ]);

        $data->categories()->attach($request->categories);

        return redirect()->route('books.index')->with('success', 'Data created successfully');
    }



    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all();
        $publishers = Publisher::all();
        $raks = NoRak::all();
        $categories = Categories::all();
        return view('books.edit', compact('book', 'authors', 'raks', 'publishers', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
            'rak_id' => 'required',
            'jumlah' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'publication_year' => 'required',
        ]);

        $book = Book::findOrFail($id);

        if ($request->hasFile('cover')) {
            // Hapus gambar lama
            Storage::delete('public/cover/' . $book->cover);

            $image = $request->file('cover');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/cover', $imgname);
            $book->cover = $imgname;
        }

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->rak_id = $request->rak_id;
        $book->publication_year = $request->publication_year;
        $book->description = $request->description;
        $book->jumlah = $request->jumlah;
        $book->save();

        // Synchronize kategori
        $book->categories()->sync($request->categories);

        return redirect()->route('books.index')->with('success', 'Data updated successfully');
    }


    public function destroy($id)
    {
        $data = Book::find($id);
        $data->delete();
        return redirect()->route('books.index')->with('success', 'Data deleted successfully');
    }
}
