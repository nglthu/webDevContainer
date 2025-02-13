<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function listStudent(){
        $students = Student::all();
        return view('Student', compact('students'));
    }
   public function createStudent(){
    return view('StudentCreate');
   }
    public function postStudent(Request $request)
    {
        //form value 
        //body http form value

        $studentIDNumber = $request->input('studentIDNumber');
        $studentFullName = $request->input('studentFullName');




        Student::create([
            "studentIDNumber" => $studentIDNumber,
            "studentFullName" => $studentFullName
        ]);



        return response()->json(
            [
                'Post success ' => true,
                'studentIDNumber' => $studentIDNumber,
                'studentFullName' => $studentFullName
            ]
        );
    }
    public function jsonStudentPost(Request $request)
    {

        $jsondata = file_get_contents('php://input');
        $data = json_decode($jsondata, true);
        echo $data['studentIDNumber'];

        Student::create([
            "studentIDNumber" => $data['studentIDNumber'],
            "studentFullName" => $data['studentFullName']
        ]);
        return response()->json([
            [
                'json post success' => true,
                'studentIDNumber' => $data['studentIDNumber'],
                'studentFullName' => $data['studentFullName']

            ]
        ]);

    }
}