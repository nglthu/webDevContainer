<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $students = Student::all();
    return view('dashboard', compact('students'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //student
    Route::get('/studentNew', 'App\Http\Controllers\StudentController@createStudent');
    Route::post('/saveStudentNew', 'App\Http\Controllers\SaveStudentController@saveNewStudent')->name('saveStudentNew');
    //Edit student
    Route::post('/editDeleteStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@optStudent')->name('delete');
    //Route::get('/getDeleteStudent/{id}', [EditDeleteStudentController::class, 'optStudent'])->name('getDelete');
    Route::get('/getDeleteStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@optStudent')->name('getDelete');

    Route::get('/getEditStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@editStudent')->name('getEdit');
    //Edit
    Route::post('/edit', 'App\Http\Controllers\EditController@index')->name('edit');
    //Save student
    Route::post('/saveStudent', 'App\Http\Controllers\SaveStudentController@index')->name('saveStudent');
    Route::get('/getJsonStudent', 'App\Http\Controllers\StudentController@jsonStudentReturn');
});

require __DIR__.'/auth.php';
