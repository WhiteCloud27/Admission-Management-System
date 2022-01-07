<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlchoose;
use App\Http\Controllers\ControlSubmit;
use App\Http\Controllers\ConfirmSubmission;
use Illuminate\Http\Request;

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

Route::match(['get','post'],'/choosesubject',[Controlchoose::class,'choose']);
Route::match(['get','post'],'/choose/submit',[ControlSubmit::class,'submit'])->name('choose.submit');

Route::match(['get','post'],'/confirm/submission',[ConfirmSubmission::class,'submit']);

