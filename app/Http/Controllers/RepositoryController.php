<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RepositoryController extends Controller
{
    //
    public function contentStore(Request $request)
    {
        dd(Storage::disk('local')->exists('Repo'));
        //Storage::disk('local')->exists('example');
        //Storage::disk('local')->put('repo/', 'Contents');

        //return Storage::url('example', 'empty_file');

        //echo Storage::url('example');
    }
}
