<?php

namespace App\Http\Controllers;
use App\Model\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	return view('index', compact('students'));
    	//return view('index')->with('students', $students);
    }

    public function createStudent()
    {
    	$students = Student::all();
    	return view('create');
    	//return view('index')->with('students', $students);
    }

    public function storeStudent(Request $request)
    {
    	//dd('submitted');
    	$student = new Student;
    	$student->name =$request->name;
    	$student->registration_id =$request->registration_id;
    	$student->department_name =$request->department_name;
    	$student->information =$request->information;
    	//dd($student);
    	$student->save();
    	//return redirect()->back();
    	return redirect()->route('index');
    }

}
