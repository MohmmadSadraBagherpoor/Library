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
        return view('category.index', compact('categories'));

    }

    public function show(Category $category)
    {
        $books = $category->books()->with('author')->get();
        return view('category.show', compact('books', 'category'));
    }
}
