<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\StudentAdmitController;
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
Route::get('/form',[StudentAdmitController::class,'index'])->name('index');
Route::post('/form',[StudentAdmitController::class,'create'])->name('create');
Route::get('/edit/{id}',[StudentAdmitController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentAdmitController::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentAdmitController::class,'destroy'])->name('destroy');


//Admit Card User side route
Route::get('/', function () {
    return view('template');
});

Route::get('/JU/about',[FirstController::class,'about'])->name('about.page');


Route::get('/admit/{id}',[StudentAdmitController::class,'pdfView'])->name('pdfView');

Route::get('/admitdownload',[StudentAdmitController::class,'downloadView'])->name('downloadView');

//Route::get('/admit',[PdfController::class,'pdfGenereation'])->name('pdfGenereation');
