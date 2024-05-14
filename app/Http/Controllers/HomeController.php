<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('home');
     }

     public function AdminPage(){
        return view('Panel.AdminPage');
    }

    public function UserPage(){
        return view('Panel.UserPage');
    }
}
