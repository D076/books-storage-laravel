<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;

class DeleteController extends BaseController
{
    public function __invoke(Book $book)
    {
        $this->service->delete($book);
        return redirect()->route('admin.book.index');
    }
}
