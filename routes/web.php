<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\BackEnd\AdminController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\AuthorController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[HomeController::class,'index']);
Route::get('about',[HomeController::class,'about']);
Route::get('post',[HomeController::class,'post']);
Route::get('contact',[HomeController::class,'contact']);

Route::prefix('user')->group(function (){
    Route::get('dashboard',[UserController::class,'dashboard']);
    Route::get('comments',[UserController::class,'comments']);
});

Route::prefix('author')->group(function (){
    Route::get('dashboard',[AuthorController::class,'dashboard']);
    Route::get('comments',[AuthorController::class,'comments']);
    Route::get('post',[AuthorController::class,'post']);
});

Route::prefix('admin')->group(function (){
    Route::get('/',[AdminController::class,'index']);
    Route::get('comments',[AdminController::class,'comments']);
    Route::get('post',[AdminController::class,'post']);
    Route::get('user',[AdminController::class,'user']);
//    Route::get('/login',[AdminController::class,'login']);
});
