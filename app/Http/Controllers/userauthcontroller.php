<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Educator;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userauthcontroller extends Controller
{

    public function create(){

        return view ('login');
    }



    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
   
    //     //$credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
                     
    //     $role=auth::user()->role;
    //     if ($role==1)
    //     {
    //         return view('/admin');
    //     }

    //     if ($role==2)
    //     {
    //         return view('pages.thdashboard');
    //     }

    //     else 
    //     {
    //         return view('pages.stdashboard');
    //     }
    //             }
            
    //             return back()->withErrors([
    //                 "error" => 'Login details are not valid'
    //             ]);
    // }

    // authenticate user function login users 

    public function login (Request $request)
    {
        //dd( "trying to login..." );
        // email and password from the current request data sent with post from the form

        $useremail = $request->email;

        // check the table that has the email provided (which user is trying to login essentailly)

        $student = Student::get()->where('email', $useremail)->count();

        $educator = Educator::get()->where('email', $useremail)->count();

        $administator = Administrator::get()->where('email', $useremail)->count();

        // depending on the table the credientials belong to log the user in to the respective dashboard

        // (1) if the credentials belong to a student authenticate the student

        if ( $student > 0 ) 
        {
            $credentials = $request->validate([
                'email' => ['bail', 'required', 'exists:students,email', 'email'],
                'password' => ['bail', 'required', 'min:5'],
            ]);

            if ( Auth::guard( 'student' )->attempt( $credentials ) )
            {
                $request->session()->regenerate();

                return redirect('stdashboard')->with('success', 'welcome back');
            }
        }

        // (2) if the credentials belong to a educator authenticate the educator

        elseif ( $educator > 0 ) 
        {
            $credentials = $request->validate([
                'email' => ['bail', 'required', 'exists:educators,email', 'email'],
                'password' => ['bail', 'required', 'min:5'],
            ]);

            if ( Auth::guard( 'educator' )->attempt( $credentials ) )
            {
                $request->session()->regenerate();

                return redirect('thdashboard')->with('success', 'welcome back');
            }
        }

         // (3) if the credentials belong to a Administator authenticate the Administator

         else if ( $administator > 0 ) 
         {
            $credentials = $request->validate([
                'email' => ['bail', 'required', 'exists:administrators,email', 'email'],
                'password' => ['bail', 'required', 'min:5'],
            ]);

            if ( Auth::guard( 'administrator' )->attempt( $credentials ) )
            {
                $request->session()->regenerate();

                return redirect('welcome')->with('success', 'welcome back');
            }
         }

         // (4) if the credentials provided dont belong to anyone in the system return back with an error message

         else
         {
            return back()->withErrors([
                'error' => 'The provided credentials do not match our records.'
            ]);
         }

    }

    // logout users
    public function logout () 
    {

        // destroying sessons

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect( '/' )->with('success', 'goodbye');
    }
}
