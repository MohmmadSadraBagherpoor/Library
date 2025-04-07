<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.login');


Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');


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

Route::post('/reservation', [\App\Http\Controllers\ReservationController::class, 'reservation'])->name('reservation.reservation');
