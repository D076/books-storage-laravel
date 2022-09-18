<?php

namespace App\Service;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function store($data): void
    {
        try {
            Db::beginTransaction();
            $genreIds = [];
            if (isset($data['genre_ids'])) {
                $genreIds = $data['genre_ids'];
                unset($data['genre_ids']);
            }

            $book = Book::firstOrCreate($data);
            $book->genres()->attach($genreIds);
            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            abort(500);
        }
    }

    public function update($data, $book)
    {
        try {
            Db::beginTransaction();
            $genreIds = [];
            if (isset($data['genre_ids'])) {
                $genreIds = $data['genre_ids'];
                unset($data['genre_ids']);
            }

            $book->update($data);
            $book->genres()->sync($genreIds);
            Db::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $book;
    }

    public function delete($book)
    {
        try {
            Db::beginTransaction();
            $book->genres()->detach();
            $book->delete();
            Db::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }
}
