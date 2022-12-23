<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('main.home');
})->name('/');

// Route::get('/about', function(){
//     return view('main.aboutus');
// });

Route::get('/categories', function(){
    return view('main.categories');
});

// Route::get('/jobUser', function(){
//     return view('main.jobUser');
// })->name('jobUser');

// Route::get('/jobAdmin', function(){
//     return view('main.jobAdmin');
// })->name('jobAdmin');

// Route::get('/loginForm',function(){
//     return view('main.login');
// });
Route::get('jobDecline/{id}', [JobController::class,'decline'])->name('decline');

Route::get('/jobApproved/{id}', [JobController::class,'approve'])->name('approve');

Route::get('/approve', [JobController::class,'jobList']);

Route::get('/request', [JobController::class,'index_request'])->name('index_request');

Route::post('/request', [JobController::class, 'request'])->name('request');

Route::get('/hired/{id}', [JobController::class,'hired'])->name('hired')->middleware('hireMiddleware');

Route::get('/login', [UserController::class,'index_login'])->name('index_login')->middleware('authenticateMiddleware');

Route::get('/register', [UserController::class,'index_register'])->name('index_register')->middleware('authenticateMiddleware');

Route::post('/login',[UserController::class,'login'])->name('login');

Route::post('/logout',[UserController::class,'logout'])->name('logout');

Route::post('/register', [UserController::class,'register'])->name('register');

Route::get('/category/{id}',[CategoryController::class, 'index']);

Route::get('/view/{id}',[JobController::class, 'index']);

Route::get('/edit/{id}',[JobController::class, 'edit']);
Route::post('/editConfirm/{id}',[JobController::class, 'update']);

Route::get('/destroy/{id}',[JobController::class, 'destroy']);

Route::post('logout',[UserController::class,'logout'])->name('logout');
