<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLoginController extends Controller
{
    public function Userlogin(){
        return view("login");
    }


    public function UserloginPost(Request $request){
       $request->validate([
        "Email" => "required",
        "Password" => "required"
       ]);

       $user = DB::table('user')
       ->where("Email", $request->Email)
       ->where("Password", $request->Password)
       ->first();

       if($user){
            return redirect(route('welcome'))-with("succes", "login succesfuly");
       }
       
       return redirect(route('user.login'))->width("error", "Email or Password wrong!");

    }
}
