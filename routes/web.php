<?php

use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\userauthcontroller;
use Illuminate\Support\Facades\Route;

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

// UI/UX navigation

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
})->middleware('auth:student');

Route::get('/thdashboard', function(){
    return view('pages.thdashboard');
})->middleware('auth:educator');

Route::get('/homepage', function(){
    return view('pages.homepage');
});


// user management

Route::get('/login',function()
{
    # code...
    return view('login'); 
});

Route::get('/reg',function()
{
    # code...
    return view('registration'); 
});

Route::get('/login',function()
{
    # code...
    return view('login'); 
});

Route::get('/reg',function()
{
    # code...
    return view('registration'); 
});

Route::post('/session', [userauthcontroller::class, 'login']);

Route::get('/logout', [userauthcontroller::class, 'logout']);

Route::post('/registration', [registrationcontroller::class, 'store']);


//content upload

Route::post('/upload_content', [RepositoryController::class, 'contentStore'])->middleware('auth:educator');


// Assessment Management

Route::get('/asses', [AssesmentController::class, 'index'])->middleware('auth:educator');

Route::get('/assesmake', [AssesmentController::class, 'create']);

Route::post('/assesstore', [AssesmentController::class, 'store']);

Route::get('/assesshow/{id}', [AssesmentController::class, 'show']);

Route::get('/assesedit/{id}', [AssesmentController::class, 'edit']);

Route::put('/assesupdate/{id}', [AssesmentController::class, 'update']);

Route::get('/assesdelete/{id}', [AssesmentController::class, 'destroy']);


Route::get('/quemake', [QuestionController::class, 'create']);

Route::post('/questore', [QuestionController::class, 'store']);

Route::get('/queedit/{id}', [QuestionController::class, 'edit']);

Route::put('/queupdate/{id}', [QuestionController::class, 'update']);

Route::get('/quedelete/{id}', [QuestionController::class, 'destroy']);


Route::get('/exam', [ExamController::class, 'index'])->middleware('auth:student');

Route::get('/quizshow/{id}', [ExamController::class, 'show']);

Route::post('/quizstore', [ExamController::class, 'store']);

Route::get('/result', [ExamController::class, 'results']);
