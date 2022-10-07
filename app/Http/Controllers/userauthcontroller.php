<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userauthcontroller extends Controller
{

    public function create(){

        return view ('login');
    }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        //$credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
                     
$role=auth::user()->role;
if ($role==1)
{
    return view('/admin');
}

if ($role==2)
{
    return view('pages.thdashboard');
}

else 
{
    return view('pages.stdashboard');
}
        }
  
        return back()->withErrors([
            "error" => 'Login details are not valid'
        ]);
    }
}
