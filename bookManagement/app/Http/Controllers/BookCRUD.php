<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookCRUD extends Controller

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
    public function createBook()
    {
        //new book from Form
        {
            return view('newBook');
        }
    }
    public function saveBook(Request $request)
    {
        //new book from Form
        {
            $bookCode = $request->input("bookCode");
            $bookName = $request->input("bookName");
            $bookAuthor = $request->input("bookAuthor");

            // Book::where('id', $id)->update(["bookCode" => $bookCode, "bookName" => $bookName, "bookAuthor" => $bookAuthor]);

            Book::create(["bookCode" => $bookCode, "bookName" => $bookName, "bookAuthor" => $bookAuthor]);

            $books = Book::all();

            return view('Book', compact('books'));
        }
    }
    public function editBook(Request $request)
    {
        //new book from Form
        {    
            
             $id = $request->id;

            $book = Book::findOrFail($id);
            return view('editBook', compact('book'));
        }
    }
}
