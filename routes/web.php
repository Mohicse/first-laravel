<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return View('login.login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);






// Route::view('login','login');
// Route::get('transfer',[HomeController::class,'transfer']);
// Route::get('getexcel',[InmortExportController::class,'getexcel']);
// Route::post('/login',[UserController::class,'login']);



//This is for the vender management


// Route::View('registration','registration');
// Route::post('/visitor',[VisitorController::class,'registration']);
// Route::View('login','login');
// Route::post('/log',[VisitorController::class,'login']);
// Route::View('/profile','profile');
// Route::get('/profile',[VisitorController::class,'profile']);
// Route::get('/delete/{id}',[VisitorController::class,'delete']);
// Route::get('/edit/{id}',[VisitorController::class,'editdata']);
// Route::put('/update/{id}',[VisitorController::class,'update']);



