<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
 


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



Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
 
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/second', function () { 
    return view('second');
});