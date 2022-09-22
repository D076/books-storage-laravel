@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Автор</th>
            <th scope="col">Жанры</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->user->name }}</td>
                <td>
                    @foreach( $book->genres as $genre)
                        {{ $genre->title }}
                        <br>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
