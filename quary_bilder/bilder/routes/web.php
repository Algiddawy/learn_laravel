<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("post/create",[PostController::class,'create']); 
Route::get("post",[PostController::class,'index'])->name('post'); 
Route::post("post/insert",[PostController::class,'insert'])->name('post.insert'); 
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('posts/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('post/delete/{id}',[PostController::class ,'delete'])->name('post.delete');
Route::get('post/delete/all',[PostController::class ,'deleteAll'])->name('post.delete.all');