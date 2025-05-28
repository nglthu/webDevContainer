<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class restfulApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bookStore(Request $request)
    {
        
        $book = Book::all();
        $data = json_decode($book, true);
        return response()->json($data);
    }

    public function postBook(Request $request)
    {
        //form value 
        //body http form value

        $bookID = $request->input('id');
        $bookName = $request->input('bookName');
        $bookCode = $request->input('bookCode');
        $bookAuthor = $request->input('bookAuthor');

 

        Book::create([
            "bookName" => $bookName,
            "bookCode" => $bookCode,
            "bookAuthor" => $bookAuthor
        ]);



        return response()->json(
            [
                'Post success ' => true,
                "bookName" => $bookName,
                "bookCode" => $bookCode,
                "bookAuthor" => $bookAuthor
            ]
        );
    }

    public function jsonBookPost(Request $request)
    {
        //by Body Json

        $jsondata = file_get_contents('php://input');
        $data = json_decode($jsondata, true);
        echo $data['id'];

        Book::create([
            "bookName" => $data['bookName'],
            "bookCode" => $data['bookCode'],
            "bookAuthor" => $data['bookAuthor'],
        ]);
        return response()->json([
            [
                'json post success' => true,
                'bookName' => $data['bookName'],
                'bookCode' => $data['bookCode'],
                'bookAuthor' => $data['bookAuthor']

            ]
        ]);

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function bookUpdate(Request $request)
    {
        $id = $request->id;

        $data = Book::findOrFail($id);

        return response()->json($data);
    }

     public function updateOnIdString(Request $request, string $id)

    {
        

        $data = Book::findOrFail($id);

         return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
