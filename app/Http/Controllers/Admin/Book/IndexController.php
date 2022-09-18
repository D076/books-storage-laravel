<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }
}
