<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfile;

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

Route::get('/user', function () {
    return view('user');
});
// Route::get('/user/{name}', function ($name) {
//     return $name;
// });
////////////////////////////////////////////////////////////////////////

// Route::get('/posts',[UserController::class,'ShowUser']);
// Route::get('/posts/create',[UserController::class,'CreatePost']);

Route::controller(UserController::class)->group(function (){
    
    Route::get('posts' , 'ShowUser');
    Route::get('/posts/create' , 'CreatePost');
});
/////////////////////////////////////////////////////////
Route::resource('seif',PostController::class);
Route::get('user_pro' , UserProfile::class);