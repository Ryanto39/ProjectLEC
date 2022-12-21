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
});

// Route::get('/about', function(){
//     return view('main.aboutus');
// });

Route::get('/categories', function(){
    return view('main.categories');
});

Route::get('/asd', function(){
    return view('main.job2');
});

Route::get('/job', function(){
    return view('main.job');
});

Route::get('/loginForm',function(){
    return view('main.login');
});

Route::post('/login',[UserController::class,'login'])->name('login');

// Route::post('/login',function(){
//     return view('main.login');
// });

Route::get('/register', [UserController::class,'register'])->name('register');

// Route::post('/register',function(){
//     return view('main.register');
// });

Route::get('/category/{id}',[CategoryController::class, 'index']);

Route::get('/view/{id}',[JobController::class, 'index']);

Route::get('/edit/{id}',[JobController::class, 'edit']);
Route::post('/editConfirm/{id}',[JobController::class, 'update']);

Route::get('/destroy/{id}',[JobController::class, 'destroy']);

