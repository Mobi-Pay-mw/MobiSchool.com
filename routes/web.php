<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\userauthcontroller;
use App\Http\Controllers\sessioncontroller;



route::get('/regform',[registrationcontroller::class,'create']);
route::post('/reg',[registrationcontroller::class,'store']);
route::post('/login',[userauthcontroller::class,'login'] );
route::get('/',[sessioncontroller::class,'create']);
route::get('/welcome', function(){

    return view('welcome'); 
});

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

Route::get('/sign_in', function(){
    return view('login');
});

Route::get('/sign_up', function(){
    return view('registration');
});
