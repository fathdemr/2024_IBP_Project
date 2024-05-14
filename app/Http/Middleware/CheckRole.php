<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class CheckRole
{
    public function __construct(){
        if(!empty($_SESSION['User'])){
            $this->User =  DB::table('users')->where('Id', $_SESSION['User']->Id)->first() ; 
        }
    }
    
    public function handle(Request $request, Closure $next): Response
    {
        if(!empty($this->User)){
            if($this->User->Type == "Admin"){
                $result = ['outcome' => 'admin'];
            }elseif($this->User->Type == "User"){
                $result = ['outcome' => 'user'];
            }
        }else{
            $result = ['outcome' => false, 'ErrorMessage' => 'Oturumunuz Zaman Aşımına Uğradı!'];
        }

        if($result['outcome'] == 'admin'){
            return redirect(route('adminpage'));
        }elseif($result['outcome'] == 'user'){
            return redirect(route('userpage'));
        }
        else{
            return redirect(route('login'))->with($result);
        } 
    }
}
