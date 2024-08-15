<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Mail\HelloWorld;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/mails', function(){
	$mail = new HelloWorld(name: 'Bagus Joko');

	Mail::to('bagoes156@gmail.com')->send($mail);
});


Route::get('/caralogin', [LoginController::class, 'index']);
Auth::routes([
	'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
