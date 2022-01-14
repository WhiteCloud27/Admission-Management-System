<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirstController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PdfController;

use App\Http\Controllers\ControlChoose;
use App\Http\Controllers\ControlSubmit;
use App\Http\Controllers\ConfirmSubmission;
use Illuminate\Http\Request;

use App\Http\Controllers\GetAdmit;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;

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
    return view('index');
});

Route::get('/dashboard',[FirstController::class,'dashboard']);
Route::get('/JU/about',[FirstController::class,'about'])->name('about.page');


Route::get('/form',[StudentController::class,'index'])->name('index');
Route::post('/form',[StudentController::class,'create'])->name('create');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');


//Route::get('/admit',[PdfController::class,'pdfView'])->name('pdfView');

Route::get('/admit',[PdfController::class,'pdfGenereation'])->name('pdfGenereation');

Route::match(['get','post'],'/choosesubject',[ControlChoose::class,'choose']);

Route::match(['get','post'],'/done/{faculty}',[ConfirmSubmission::class,'done'])->name('done');

Route::match(['get','post'],'/choose/submit',[ControlSubmit::class,'submit'])->name('choose.submit');
Route::match(['get','post'],'/getadmitform',function () 
{
    return view('getadmit.getadmit-layout');
});
Route::post('/getadmit',[GetAdmit::class,'admit'])->name('getadmit');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post("users",[UsersController::class, 'getData']);
Route::view("/","users");
Route::view("faq","faqs");


Route::post('AdminForm',[FaqController::class,'create']);
Route::get('/Faq',[FaqController::class,'index'])->name('index');

Route::view("/Admin","AdminForm");






Route::get('/uploadpage',[PageController::class,'uploadpage']);
//Route::get('/uploadpage', [App\Http\Controllers\PageController::class, 'index'])->name('uploadpage');
//Route::get('/uploadpage', [PageController::class, 'uploadpage']);
//Route::get('/photos/popular', [PhotoController::class, 'popular']);
