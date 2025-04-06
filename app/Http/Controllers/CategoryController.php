<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
//        dd($categories);
        return view('category.index', compact('categories'));

    }

    public function show(Category $category)
    {
        $book = Book::where('category_id', $category->id)->first();
        return view('category.show', compact('book'));
    }
}
