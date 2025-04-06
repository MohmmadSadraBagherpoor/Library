@extends('layouts.master')

@section('content')
        @foreach($categories as $category )
            <div>
                <h5>{{ $category->name }}</h5>
                <a href="{{ route('category.show', $category) }}">Click</a>
            </div>
        @endforeach
@endsection
