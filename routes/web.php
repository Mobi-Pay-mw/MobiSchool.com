<?php

use App\Http\Controllers\RepositoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userauthcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/welcome', function () {
    return view('welcome');

});
 
Route::get('/primary', function () {
    return view('pages.primary');

});

Route::get('/secondary', function(){
    return view('pages.secondary');
});

Route::get('/tertiary', function(){
    return view('pages.tertiary');
});

Route::get('/library', function(){
    return view('pages.library');
});

Route::get('/about', function(){
    return view('pages.about');
});


Route::get('/stdashboard', function(){
    return view('pages.stdashboard');
});

Route::get('/thdashboard', function(){
    return view('pages.thdashboard');
});

Route::get('/homepage', function(){
    return view('pages.homepage');
});

Route::post('/upload_content', [RepositoryController::class, 'contentStore']);

