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


    // $user = new User;
    // $user->name = $validated["name"];
    // $user->phone = $validated["phone"];
    // $user->class = $validated["class"];
    // $user->password = $validated["password"];
    // $user->email = $validated["email"];
    // $user->save();

    $user = User::create($validated);
    Auth::login($user);
    return redirect('/welcome')->with('success' ,'New account has been created for');
    }
}


  