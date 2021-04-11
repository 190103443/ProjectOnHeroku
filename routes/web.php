<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UploadFileController;

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
Route::get('example/{lang}',function($lang){
    App::setlocale($lang);
    return view('index');
});
Route::get('/uploadfile',[UploadFileController::class,'index']);
Route::post('/uploadfile',[UploadFileController::class,'showUploadFile']);

Route::get('mail/send',[MailController::class,'send']);

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/contact-us',[ContactController::class,'contact']);

Route::get('/charts',function(){
    return view('charts');
});

Route::get('/upload',function(){
    return view('file_upload');
});
