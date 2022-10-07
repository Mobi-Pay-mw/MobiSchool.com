<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class registrationcontroller extends Controller
{
    public function create(){

        return view ('registration');
    }

    public function store(){

$validated = request()->validate([
'name'=>'required',
'phone'=>'required',
'class'=>'required',
'password'=>'required',
'email'=>'required',
]);


    $user = User::create($validated);
    Auth::login($user);

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
}


  