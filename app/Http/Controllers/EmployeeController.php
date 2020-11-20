<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;
class EmployeeController extends Controller
{
    public function index(){
        $employee = DB::table('employees')
                    ->get();
        return view('employee' , ['employees'=>$employee]);
    }
    public function add(){
        return view('add');
    }
    public function store(Request $req){
        $id=3;
        $name = $req->name;
        $email = $req->email;
        $dob = $req->dob;

        DB::table('employees')->insert(
            [
                'id'=>$id,
                'name'=>$name,
                'email'=>$email,
                'dob'=>$dob
            ]
            );
            return redirect()->to('employee');
    }
    public function createemp(){
        return view('admin.pages.create-employees');
    }
    public function storeemp(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|unique:employees,email',
            // 'salary'=>'required|integer',
            'dob' => 'required|date'
        ]);
        $name=$request->name;
        $email=$request->email;
        // $salary=$request->salary;
        $dob=$request->dob;

        $obj = new Employee();
        $obj->name =$name;
        $obj->email =$email;
        // $obj->salary =$salary;
        $obj->dob =$dob;
        if($obj->save()){
            echo 'Success';
        }

    }

}
