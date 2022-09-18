<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;
use App\Models\Genre;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        $genres = Genre::all();
        $users = User::all();
        return view('admin.book.edit', compact('book',  'genres', 'users'));
    }
}
