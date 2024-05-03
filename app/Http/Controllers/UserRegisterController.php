<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserRegisterController extends Controller
{
    public function Usersignin(){
        return view("signin");
    }

    public function UserSigninPost(Request $request){
        $request->validate([
            "FirstName" => "required",
            "LastName" => "required",
            "Email" => "required",
            "Password" => "required"
        ]);

        $user = DB::table('user')->insert([
            "FirstName" => $request->FirstName,
            "LastName" => $request->LastName,
            "Email" => $request->Email,
            "Password" => Hash::make($request->Password)
        ]);

        if($user){
            return redirect(route('welcome'))->with("success", "User created succesfuly!");
        }

        return redirect(route('user.signin'))->with("error", "User can not created");
    }
}
