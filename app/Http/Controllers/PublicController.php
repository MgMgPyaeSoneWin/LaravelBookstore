<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index()
    {
        $book = Book::orderBy('created_at', 'asc')->get();
        return view('home', [
            'book' => $book
        ]);
    }
}
