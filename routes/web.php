<?php

use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\userauthcontroller;
use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\RepositoryController;



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

Route::get('asses', [AssesmentController::class, 'index']);

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

Route::get('/exam', [ExamController::class, 'index']);
Route::get('/reg',function()
{
    # code...
    return view('registration'); 
});
Route::post('/upload_content', [RepositoryController::class, 'contentStore']);

Route::get('/quizshow/{id}', [ExamController::class, 'show']);

Route::post('/quizstore', [ExamController::class, 'store']);

Route::get('/result', [ExamController::class, 'results']);
