<?php

namespace App\Http\Controllers;

use App\Models\Student;
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

        $user = Student::create($validated);

        Auth::guard( 'student' )->login($user );

        return redirect('stdashboard' )->with('success' ,'New account has been created for');
    }
}