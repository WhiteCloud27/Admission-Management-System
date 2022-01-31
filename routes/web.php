<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\AdmitCardController;
use App\Http\Controllers\StAdmitController;
use App\Http\Controllers\PdfController;

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


//Admit Card Admin panel route
Route::get('/form',[AdmitcardController::class,'index'])->name('index');
Route::post('/form',[AdmitcardController::class,'creates'])->name('creates');
Route::get('/edit/{id}',[AdmitcardController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[AdmitcardController::class,'update'])->name('update');
Route::get('/delete/{id}',[AdmitcardController::class,'destroy'])->name('destroy');


//Admit Card User side route
Route::get('/', function () {
    return view('template');
});

Route::get('/JU/about',[FirstController::class,'about'])->name('about.page');


Route::get('/admit/{id}',[AdmitcardController::class,'pdfView'])->name('pdfView');

Route::get('/admitdownload',[AdmitcardController::class,'downloadView'])->name('downloadView');

//Route::get('/admit',[PdfController::class,'pdfGenereation'])->name('pdfGenereation');
