<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home(){
        return view('home');
     }

     public function AdminPage(){
        return view('Panel.Admin.AdminPage');
    }

    public function UserPage(){
        $messages = DB::table('Announcement')->get();
        return view('Panel.User.UserPage', ['messages' => $messages]);
    }

    public function ManageUsers(){
        $users = DB::table('users')->get();
        $messages = DB::table('Messages')->get();
        return view('Panel.Admin.ManageUsers', ['users' => $users, 'messages' => $messages]);
    }

    public function ProductPage(){
        return view('Panel.Product', [
            'products' => DB::table('products')->get()
        ]);
    }

    public function AddProduct(){
        return view('Panel.AddProduct', [
            'products' => DB::table('products')->get()
        ]);
    }

    public function Dashboard(){
        return view('Panel.Dashboard');
    }

    public function Announcement(){
        return view('Panel.Admin.Announcement');
    }
}
