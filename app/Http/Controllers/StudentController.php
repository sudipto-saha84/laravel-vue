<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(Request $request)
    {
        $student = Student::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone
        ]);
        return response()->json([
           'msg'=>'Data Saved Successfully'
        ]);
    }

    public function getStudent()
    {
        $students = Student::get();
        return json_encode($students);
    }
}
