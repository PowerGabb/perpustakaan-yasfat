<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index() {

        $profile = User::where('id', Auth::user()->id)->first();
        return view('account.index', compact('profile'));
    }

    public function edit(){

        $profile = User::where('id', Auth::user()->id)->first();
        return view('account.edit', compact('profile'));
    }

    public function update(Request $request){

        $profile = User::where('id', Auth::user()->id)->first();

        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->nisn = $request->nisn;
        $profile->class = $request->class;
        $profile->save();

        return redirect('/profile');
    }

    public function rents(){

        $data = Rent::where('user_id', Auth::user()->id)->get();
        return view('account.pinjamanku', compact('data'));
    }

    public function pinjam($id) {

        $data = Book::where('id', $id)->first();
        return view('account.alert', compact('data'));
    }

    public function pinjamNow($id) {

        $rent = Rent::create([
            'user_id' => Auth::user()->id,
            'book_id' => $id,
            'status' => 'waiting'
        ]);

        return redirect('/pinjamanku');
    }
}
