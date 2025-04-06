<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author', 'category')->get();
        return view('book.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }
}
