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

        $json = file_get_contents('php://input');


        $dataJSON = json_decode($json, true);

        echo $dataJSON['bookName'];

        Book::create([
            "bookName" => $dataJSON['bookName'],
            "bookCode" => $dataJSON['bookCode'],
            "bookAuthor" => $dataJSON['bookAuthor'],
        ]);

        return response()->json([
            [
                'json post success' => true,
                'bookName' => $dataJSON['bookName'],
                'bookCode' => $dataJSON['bookCode'],
                'bookAuthor' => $dataJSON['bookAuthor']

            ]
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function bookUpdate(Request $request)
    {
        $id = $request->id;

        $data = Book::findOrFail($id);

        return response()->json($data);
    }

    public function updateOnIdString(Request $request)

    {
        $headers = apache_request_headers();
        $id = $request->header('id');

        $data = Book::findOrFail($id);

        return response()->json($data);
    }

    //POST data via Params
    public function postDataviaParams(Request $request){
        

         $id = $PARAMS['id'];
         $bookName = $PARAMS['bookName'];
         $bookCode = $PARAMS['bookCode'];
         $bookAuthor = $PARAMS['bookAuthor'];
         return response()->json(

         [
            'Json response' => 'ok',
            'bookName' => $bookName
         ]);
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
