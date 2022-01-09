<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[FirstController::class,'dashboard']);
Route::get('/JU/about',[FirstController::class,'about'])->name('about.page');


Route::get('/form',[StudentController::class,'index'])->name('index');
Route::post('/form',[StudentController::class,'create'])->name('create');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');

//Pdf route
Route::get('/admit',[PdfController::class,'pdfView'])->name('pdfView');

// Route::get('/download',[PdfController::class,'test'])->name('test'); 

// Route::get('/', function () {
//     return view('hhh');
// }); 
//Route::get('/admit',[FirstController::class,'about'])->name('about.page');

//Route::get('/admit',[PdfController::class,'pdfGenereation'])->name('pdfGenereation');
