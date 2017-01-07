<?php

namespace App\Http\Controllers;

use App\Book;
use App\author;
use App\genre;
use App\publisher;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::with('genre','author','publisher')->get();
        return view('home', [
            'book' => $book
        ]);
    }
}
