<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function Announcement(Request $request){

        $message = DB::table('Announcement')->insert([
            "Name" => $_SESSION['User']->FirstName,
            "Title" => $request->Title,
            "Message" => $request->Message
        ]);

        if($message){
            return back()->with('success', 'Your announcement Created Succesfuly!');
        }
    }
}
