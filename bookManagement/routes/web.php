<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/getDeleteBook/{id}', 'App\Http\Controllers\BookCRUD@delBook');
Route::post('/getDeleteBook/{id}', 'App\Http\Controllers\BookCRUD@delBook');


//new book

Route::get('/bookNew', 'App\Http\Controllers\BookCRUD@createBook');

//saveBookNew

Route::post('/saveBookNew', 'App\Http\Controllers\BookCRUD@saveBook');
Route::post('/saveBook', 'App\Http\Controllers\BookCRUD@saveBook');

//edit book: getEditBook

Route::get('/getEditBook/{id}', 'App\Http\Controllers\BookCRUD@editBook');


require __DIR__.'/auth.php';
