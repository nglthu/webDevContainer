<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', 'App\Http\Controllers\BookController@index')->name('getDelete');

Route::get('/getDeleteBook/{id}', 'App\Http\Controllers\EditDeleteBookController@delBook')->name('getDelete');

require __DIR__.'/auth.php';
