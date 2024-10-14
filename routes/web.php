<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
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





Route::get('/home', function () { return view('home.index'); })->name('home.index');



Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('/blog/edit/{blog}',[BlogController::class,'edit'])->name('blog.edit');
Route::patch('/blog/update/{blog}',[BlogController::class,'update'])->name('blog.update');
Route::get('/blog/show/{blog}',[BlogController::class,'show'])->name('blog.show');

Route::delete('/blog/delete/{blog}',[BlogController::class,'destroy'])->name('blog.delete');
