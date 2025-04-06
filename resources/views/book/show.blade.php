@extends('layouts.master')

@section('content')
    <div>
        <h5>Title: {{ $book->title }}</h5>
        <h5>Author's Name: {{ $book->author->name }}</h5>
        <h5>Category's Name: {{ $book->category->name }}</h5>
        <h5>ISBN: {{ $book->isbn }}</h5>
        <h5>Year is Published: {{ $book->year_published }}</h5>
        <h5>Total :{{ $book->total_copies }}</h5>
        <h5>Available: {{ $book->available_copies }}</h5>
        <form method="POST" action="#">
            @csrf
{{--            <input type="hidden" name="book_id" value="{{ $book->id }}">--}}
{{--            <input type="hidden" name="member_id" value="{{ $member->id }}">--}}
            <button type="submit">reserve</button>
        </form>
    </div>
@endsection
