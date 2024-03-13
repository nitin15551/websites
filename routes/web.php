<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index']);
Route::get('/contact',[ContactusController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/blogDetails',[ServicesController::class,'blogindex']);


