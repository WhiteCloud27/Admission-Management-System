<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlChoose;
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

Route::match(['get','post'],'/choosesubject',[ControlChoose::class,'choose']);

Route::match(['get','post'],'/done/{faculty}',[ConfirmSubmission::class,'done'])->name('done');

Route::match(['get','post'],'/choose/submit',[ControlSubmit::class,'submit'])->name('choose.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
