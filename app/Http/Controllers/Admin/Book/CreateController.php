<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Genre;
use App\Models\User;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $genres = Genre::all();
        $users = User::all();
        return view('admin.book.create', compact('genres','users'));
    }
}
