<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index(){
		$all = Student::all(); //select * from students
		return view('students',['all'=>$all]); 
	}
    public function create(){
    	return view('add-student');
    }
    public function store(Request $req){
    	$name = $req->name;
    	$email = $req->email;
    	$dob = $req->dob;

    	//eloquent systex is insert data using model

    	$obj = new Student();
    	$obj->name =$name;
    	$obj->email =$email;
    	$obj->dob =$dob;

    	if($obj->save()) {
    		echo 'Successfully Inserted';
    	}
	}
	public function edit($id){
		$student = Student::where('id', '=' ,$id)
							 ->first();
		return view('edit-student',['student' =>$student]);
	}
	public function update($id, Request $request){
		$student = Student::where('id' , '=' , $id)
							 ->first();
		$student->name = $request->name;
		$student->email = $request->email;
		$student->dob = $request->dob;
		if($student->save()){
			return redirect()->to('students');
		}
	}

}
