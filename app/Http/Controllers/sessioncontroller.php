<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    public function create()
    {

        return view ('login');
    }
}
