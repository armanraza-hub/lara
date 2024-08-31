<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\em;
use App\Http\Controllers\usercontroler;

// use App\Http\Controllers\fromer;


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


Route::get('i',[em::class,'index']);
Route::post('i',[em::class,'create']);
Route::get('i',[em::class,'view']);
Route::get('edit/{id}',[em::class,'edit'])->name('edit');



