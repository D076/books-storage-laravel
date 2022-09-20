<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Book\UpdateRequest;
use App\Http\Resources\Book\BookResource;
use App\Models\Book;
use App\Service\BookService;
use Illuminate\Http\Request;


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

    public function update(UpdateRequest $request, $book)
    {
        $user_id = $request->user()->id;
        $data = $request->validated();
        $book = Book::findOrFail($book);
        if ($user_id == $book->user_id) {
            $book = $this->service->update($data, $book);
            return new BookResource($book);
        } else
            return response('You have no permission', 403);
    }

    public function delete(Request $request, $book)
    {
        $user_id = $request->user()->id;
        $book = Book::findOrFail($book);
        if ($user_id == $book->user_id) {
            $this->service->delete($book);
        } else
            return response('You have no permission', 403);
        return response("Success", 200);
    }
}
