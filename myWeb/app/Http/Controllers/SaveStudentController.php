<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;


class SaveStudentController extends Controller
{
    public function index(Request $request)
    {

        $id = $request->input("id");

        $studentFullName = $request->input("studentFullName");
        $studentIDNumber = $request->input("studentIDNumber");

        Student::where('id', $id)->update(["studentFullName" => $studentFullName, "studentIDNumber" => $studentIDNumber]);
        $students = Student::all();

        return view('Student', compact('students'));
    }

    public function saveNewStudent(Request $request)
    {
        $studentFullName = $request->input("studentFullName");
        $studentIDNumber = $request->input("studentIDNumber");
        Student::create(["studentFullName" => $studentFullName, "studentIDNumber" => $studentIDNumber]);
        $students = Student::all();

        return view('Student', compact('students'));

    }

}