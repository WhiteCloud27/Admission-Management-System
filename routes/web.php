<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaqController;


Route::post('AdminForm',[FaqController::class,'create']);
Route::get('/Faq',[FaqController::class,'index'])->name('index');

Route::view("/","AdminForm");





