<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class EditDeleteStudentController extends Controller

{
    public function delBook(Request $request)
    {
        //to do: request->id


        $id = $request->id;

        $book = Book::findOrFail($id);
        $book->delete();

        $books = Book::all();
        return view('Book', compact('books'));
    }

    public function editStudent(Request $request)
    {
        $id = $request->id;

        $student = Book::findOrFail($id);


        return view('StudentEdit', compact('student'));


    }
}
