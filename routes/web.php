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



use App\Http\Controllers\FirstController;
use App\Http\Controllers\AdmitcardController;
use App\Http\Controllers\PdfController;

use App\Http\Controllers\ControlChoose;
use App\Http\Controllers\ControlSubmit;
use App\Http\Controllers\ConfirmSubmission;
use Illuminate\Http\Request;

use App\Http\Controllers\GetAdmit;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\AdminResultController;

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


Route::post('AdminForm',[FaqController::class,'create']);
Route::get('/Faq',[FaqController::class,'index'])->name('index');

Route::view("/Admin","AdminForm");






Route::get('/uploadpage',[PageController::class,'uploadpage']);
//Route::get('/uploadpage', [App\Http\Controllers\PageController::class, 'index'])->name('uploadpage');
//Route::get('/uploadpage', [PageController::class, 'uploadpage']);
//Route::get('/photos/popular', [PhotoController::class, 'popular']);

//Route::get('/photos/popular', [PhotoController::class, 'popular']);

//Route::get('/admit',[PdfController::class,'pdfGenereation'])->name('pdfGenereation');



//Route for contact

Route::get('/contactus',[ContactController::class,'contact'] );
Route::post('/sendmessage',[ContactController::class,'sendEmail'])->name('contact.send');

Route::post("admins",[AdminResultController::class,'setResult']);
Route::view("admin","admins");

Route::post("candidate",[AdminResultController::class,'getResult']);
Route::view("candidate","candidate");

