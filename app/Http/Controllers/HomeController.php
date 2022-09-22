<?php

namespace App\Http\Controllers;

use App\Models\Book;

class HomeController extends Controller
{
    public function  __invoke()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }
}
