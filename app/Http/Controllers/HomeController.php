<?php

namespace App\Http\Controllers;

use App\Book;
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
//        $book = Book::orderBy('created_at', 'asc')->get();
//        $book = Book::with('app\author')->get();
//        $book = Book::with('app\genre')->get();
        $book = Book::find(1)->genre->get()->toArray();
        var_dump($book);die();
        return view('home', [
            'book' => $book
        ]);
    }
}
