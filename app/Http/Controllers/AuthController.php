<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Register(){
        return view('Auth.RegisterPage');
    }

    public function Login(){
        return view('Auth.LoginPage');
    }


    public function RegisterPost(Request $request){
    
        $role = $request->input('Role'); 
        

        $user = DB::table('users')->insert([
            "FirstName" => $request->FirstName,
            "LastName" => $request->LastName,
            "Email" => $request->Email,
            "Password" => Hash::make($request->Password),
            "Type" => $role
        ]);

        if($user){
            return redirect(route('login'));
        }
        else{
            return back()->with('error', "User can not created!");
        }

    }

    public function LoginPost(Request $request){

        
        $user = DB::table('users')
        ->where('Email', $request->Email)
        ->first();

        if($user){
            if(Hash::check($request->Password, $user->Password)){
                $_SESSION['User'] =  $user;
                return redirect(route('home'));
            }
        }else{
            return redirect(route('login'))->with('error', 'Invalid credentials');
        }
    }



    public function Logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }
}
