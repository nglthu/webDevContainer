<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $books = Book::all();

    return view('dashboard', compact('books'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/book', 'App\Http\Controllers\BookController@index');
    Route::get('/getDeleteBook/{id}', 'App\Http\Controllers\BookCRUD@delBook');
    Route::post('/getDeleteBook/{id}', 'App\Http\Controllers\BookCRUD@delBook');

});

Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/getDeleteBook/{id}', 'App\Http\Controllers\BookCRUD@delBook');
Route::post('/getDeleteBook/{id}', 'App\Http\Controllers\BookCRUD@delBook');


Route::get('/bookjson', 'App\Http\Controllers\restfulApiController@bookStore');

Route::post('/bookUpdate', 'App\Http\Controllers\restfulApiController@bookUpdate');

Route::post('/postBook', 'App\Http\Controllers\restfulApiController@postBook');
Route::post('/jsonBookPost', 'App\Http\Controllers\restfulApiController@jsonBookPost');




//new book

Route::get('/bookNew', 'App\Http\Controllers\BookCRUD@createBook');

//saveBookNew

Route::post('/saveBookNew', 'App\Http\Controllers\BookCRUD@saveBook');
Route::post('/saveBook', 'App\Http\Controllers\BookCRUD@updateBook');

//edit book: getEditBook

Route::get('/getEditBook/{id}', 'App\Http\Controllers\BookCRUD@editBook');

Route::get('/getJsonBook', 'App\Http\Controllers\BookCRUD@jsonBookReturn');

//    Route::get('/getJsonStudent', 'App\Http\Controllers\StudentController@jsonStudentReturn');


require __DIR__ . '/auth.php';
