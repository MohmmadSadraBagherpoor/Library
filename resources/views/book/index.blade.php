@extends('layouts.master')

@section('content')
        @foreach($books as $book)
            <div>
                <h5>Title: {{ $book->title }}</h5>
                <h5>Author's Name: {{ $book->author->name }}</h5>
                <h5>Category's Name: {{ $book->category->name }}</h5>
                <a href="{{ route('book.show', $book) }}">Click</a>
            </div>
        @endforeach
@endsection
