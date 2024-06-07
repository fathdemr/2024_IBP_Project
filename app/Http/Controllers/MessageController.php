<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function MessagePage(){
        $users = DB::table('users')->where('type', 'admin')->get();
        return view('Panel.User.Messages', ['users' => $users]);
    }

    public function Message(){
        return view('Panel.User.SendMessage');
    }

    public function SendMessage(Request $request){

        $message = DB::table('Messages')->insert([
            "Name" => $request->Name,
            "Title" => $request->Title,
            "Message" => $request->Message
        ]);

        if($message){
            return back()->with('success', 'Your message Created Succesfuly!');
        }
    }
}
