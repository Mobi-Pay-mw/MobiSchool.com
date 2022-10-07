<?php

use App\Http\Controllers\RepositoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userauthcontroller;
<<<<<<< HEAD
use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\RepositoryController;



route::get('/regform',[registrationcontroller::class,'create']);
route::post('/reg',[registrationcontroller::class,'store']);
route::post('/login',[userauthcontroller::class,'login'] );
route::get('/',[sessioncontroller::class,'create']);
route::get('/welcome', function(){

    return view('welcome'); 
});
=======
>>>>>>> parent of badaa0c (Merge branch 'Assignment' into Assessment_2.0)

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

<<<<<<< HEAD
// Route::get('/sign_in', function(){
//     return view('login');
// });

// Route::get('/sign_up', function(){
//     return view('registration');
// });

=======
>>>>>>> parent of badaa0c (Merge branch 'Assignment' into Assessment_2.0)

Route::get('/stdashboard', function(){
    return view('pages.stdashboard');
});

Route::get('/thdashboard', function(){
    return view('pages.thdashboard');
});

Route::get('/homepage', function(){
    return view('pages.homepage');
});
<<<<<<< HEAD

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

// login 
Route::post('/session', [userauthcontroller::class, 'login']);

Route::get('asses', [AssesmentController::class, 'index']);
=======
>>>>>>> parent of badaa0c (Merge branch 'Assignment' into Assessment_2.0)

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

Route::post('/upload_content', [RepositoryController::class, 'contentStore']);

<<<<<<< HEAD
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
=======
>>>>>>> parent of badaa0c (Merge branch 'Assignment' into Assessment_2.0)
