<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Register(){
        return view('Auth.RegisterPage');
    }

    public function Login(){
        return view('Auth.LoginPage');
    }

    public function Edit($id){
        $user = DB::table('users')->where('Id', $id)->first();
        return view('Auth.Update', compact('user'));
    }

    public function Delete($id){
        $user = DB::table('users')->where('Id', $id)->delete();
        return redirect()->back()->with('success', 'User Deleted Succesfuly!');
    }

    public function MyProfile($id){
        $user = DB::table('users')->where('Id', $id)->first();
        return view('Auth.myprofile', compact('user'));
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


    public function Update(Request $request, $id){
        $role = $request->input('Role'); 
        $data = array();
        
        $data['FirstName'] = $request->FirstName;
        $data['LastName'] = $request->LastName;
        $data['Email'] = $request->Email;
        $data['Type'] = $role;


        if ($request->filled('Password')) {
            $data['Password'] = bcrypt($request->Password);
        }
        
        DB::table('users')->where('Id', $id)->update($data);

        return redirect()->route('manageusers')->with('success', 'User Updated Succesfuly!');

    }


    public function UpdateProfile(Request $request, $id){

        $data = array();

        $data['FirstName'] = $request->FirstName;
        $data['LastName'] = $request->LastName;
        $data['Email'] = $request->Email;

        if ($request->filled('Password')) {
            $data['Password'] = bcrypt($request->Password);
        }

        DB::table('users')->where('Id', $id)->update($data);

        return redirect()->back()->with('success', 'Password updated');

    }

    


    
    

}
