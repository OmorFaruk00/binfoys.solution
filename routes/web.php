<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontEndController::class,'index'])->name('home');
Route::get('/about', [FrontEndController::class,'about'])->name('about');
Route::get('/contact', [FrontEndController::class,'contact'])->name('contact');
Route::get('/services', [FrontEndController::class,'service'])->name('service');
Route::get('/blog', [FrontEndController::class,'blog'])->name('blog');
Route::get('/quote', [FrontEndController::class,'quote'])->name('quote');
Route::get('/services/dev', [FrontEndController::class,'servicesDev'])->name('dev');
