<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('books')->group(function (){
   Route::get('/', [BookController::class,'index'])->name('book.index');
   Route::get('/{book}', [BookController::class, 'show'])->name('book.show');
});

Route::prefix('categories')->group(function (){
    Route::get('/', [CategoryController::class,'index'])->name('category.index');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('category.show');
});

Route::prefix('authors')->group(function (){
    Route::get('/', [AuthorController::class,'index'])->name('author.index');
    Route::get('/{author}', [AuthorController::class, 'show'])->name('author.show');
});
