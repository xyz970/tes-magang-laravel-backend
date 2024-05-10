<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageTempController;
use Illuminate\Support\Facades\Log;
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

Route::get('/', function(){
    return redirect('book');
});
Route::get('/data', [BookController::class,'get_data'])->name('book_data');
Route::get('search/{keyword}',[BookController::class,'search'])->name('book_search');
Route::get('/data/sort',[BookController::class,'sort'])->name('paginate');
Route::resource('book', BookController::class);


//image upload
Route::post('image/temp/store',[ImageTempController::class,'store'])->name('image_temp_store');
// Route::get('image/temp/delete/{filename?}',[ImageTempController::class,'delete'])->name('image_temp_delete');
Route::delete('image/temp/delete',[ImageTempController::class,'delete'])->name('image_temp_delete');

Route::get('/log',function(){
    Log::channel('daily')->info('Hello World..');
});
