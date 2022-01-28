<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentCont;


Route::get('/admin',[StudentCont::class,'index9'])->name('index');
Route::post('/admin',[StudentCont::class,'addData9'])->name('addData');
Route::get('/edit/{id}',[StudentCont::class,'edit9'])->name('edit');
Route::put('/edit/{id}',[StudentCont::class,'update9'])->name('update');
Route::post('/home',function(){return view('user');});
Route::get('/delete/{id}',[StudentCont::class,'destroy9'])->name('destroy');
Route::get('/',function(){return view('user');});
Route::post('/search-record',[StudentCont::class,'search9']);


