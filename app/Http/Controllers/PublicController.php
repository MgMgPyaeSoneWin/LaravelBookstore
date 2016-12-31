<?php

namespace App\Http\Controllers;


use App\Book;
use App\author;
use App\genre;
use App\publisher;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index()
    {
        $book = Book::orderBy('created_at', 'asc')->get();
        return view('public', [
            'book' => $book
        ]);
    }
}
