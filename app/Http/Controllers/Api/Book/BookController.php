<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Book\UpdateRequest;
use App\Http\Resources\Book\BookResource;
use App\Models\Book;
use App\Service\BookService;

class BookController extends Controller
{
    public $service;

    public function __construct(BookService $service)
    {
        $this->service = $service;
    }

    public function books()
    {
        return BookResource::collection(Book::all());
    }

    public function show($book)
    {
        return new BookResource(Book::findOrFail($book));
    }

    // ToDo Должна быть авторизация под автором книги
    public function update(UpdateRequest $request, $book)
    {
        $data = $request->validated();
        $book = Book::findOrFail($book);
        $book = $this->service->update($data, $book);
        return new BookResource($book);
    }

    // ToDo Должна быть авторизация под автором книги
    public function delete($book)
    {
        $book = Book::findOrFail($book);
        $this->service->delete($book);
        // ToDo Добавить код успеха
        return json_encode('200');
    }
}
