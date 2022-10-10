<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Chartjs(){
        $Events = array
                  (
                    "0" => array
                              (
                               "title" => "Event One",
                               "start" => "2022-10-09",
                               ),
                    "1" => array
                               (
                                "title" => "Event Two",
                                "start" => "2022-10-10",
                                )
                  );
        return view('pages.fullcalendar',['Events' => $Events]);
    }
}
