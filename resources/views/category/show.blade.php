@extends('layouts.master')

@section('content')
    <div>
        <h5>{{ $book->title }}</h5>
        <h5>{{ $book->author->name }}</h5>
    </div>
@endsection
