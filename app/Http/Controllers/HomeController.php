<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Rent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = Book::with('categories')->get();
        return view('public.index', compact('data'));
    }

    public function dashboard(){


        $books = Book::count();
        $categories = Categories::count();
        $rents = Rent::where('status', 'rented')->count();
        return view('dashboard', compact('books', 'categories', 'rents'));
    }

    public function book($id){

        $book = Book::with('categories', 'noRak', 'author', 'publisher' )->find($id);
        return view('public.book-detail', compact('book'));

    }
}
