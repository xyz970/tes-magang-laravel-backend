<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageTempController;
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

Route::get('/', [BookController::class,'index']);
Route::get('/data', [BookController::class,'get_data'])->name('book_data');
Route::post('insert',[BookController::class,'insert'])->name('book_insert');
Route::get('/insert_form', [BookController::class,'insert_form'])->name('insert_form');
Route::get('edit/{id}',[BookController::class,'edit']);
Route::post('update/{id}',[BookController::class,'update'])->name('book_update');
Route::get('search/{keyword}',[BookController::class,'search'])->name('book_search');
Route::get('delete/{keyword}',[BookController::class,'delete'])->name('book_delete');

//image upload
Route::post('image/temp/store',[ImageTempController::class,'store'])->name('image_temp_store');
Route::get('image/temp/delete/{filename?}',[ImageTempController::class,'delete'])->name('image_temp_delete');
