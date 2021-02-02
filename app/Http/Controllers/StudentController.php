<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
	//SESI 11
	public function index(){
		$students = Student::all();

		//$students = Student::orderBy('name', 'desc')->get();

		return view('student.index', ['students' => $students]);
	}

	//SESI 12
    public function create(){
	    //Memanggil seluruh data Fakultas
        $faculties = Faculty::pluck('name', 'id');
	    return view('student.create', compact('faculties'));
    }

    public function store(Request $request){
	    $request->validate([
	        'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'faculty_id' => 'required'
        ]);

        //$format_date = date('Y-m-d'); //Fomat Date and time
        //$format_date = $request->get('birth_date');

	    $student = new Student([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'gender' => $request->get('gender'),
            'birth_place' => $request->get('birth_place'),
            'birth_date' => $request->get('birth_date'),
            'faculty_id' => $request->get('faculty_id')
        ]);
	    $student->save();
	    return redirect('/student')->with('success', 'Student Saved!');
    }

    public function edit($id){
	    $student = Student::find($id);
	    return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id){
	    $request->validate([
	        'code' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
        ]);

	    $student = Student::find($id);
	    $student->code = $request->get('code');
        $student->name = $request->get('name');
        $student->gender = $request->get('gender');
        $student->birth_place = $request->get('birth_place');
        $student->birth_date = $request->get('birth_date');
        $student->save();

        return redirect('/student')->with('success', 'Student Updated!');
    }

    public function destroy($id){
	    $student = Student::find($id);
	    $student->delete();

	    return redirect('/student')->with('success', 'Student Deleted!');
    }

}
