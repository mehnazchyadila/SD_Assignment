<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        if(Session::has('userid')){
            return redirect()->to('dashboard');
        }
        return view('admin.pages.auth.login');
    }

    public function loginstore(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email','=',$email)->first();
        if(Hash::check($password, $user->password)) {//password matched
            //save some user info in the session
            Session::put('userid',$user->id);
            Session::put('useremail',$user->email);
            return redirect()->to('/dashboard');
        }
        else {
            return redirect()->to('/login');
        }
    
    }
}
