<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;

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


Route::get('/blog',[HomeController::class,'index'])->name('blog');
Route::post('post/update' ,[HomeController::class,'update'])->name('post.update');
Route::get('post/delete/{id}' ,[HomeController::class,'destroy']);


//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logout', [AuthenticatedSessionController::class,'logout']);

Route::get('/dashboard',[PostController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard',[PostController::class,'store'])->middleware(['auth'])->name('post.store');


