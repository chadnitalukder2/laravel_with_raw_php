<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('posts',[PostController::class, 'index'])->name('post.index');
Route::get('post/create',[PostController::class, 'create'])->name('post.create');
Route::post('post/store',[PostController::class, 'store'])->name('post.store');

Route::get('post/show/{id}',[PostController::class, 'show'])->name('post.show');
Route::get('post/edit/{id}',[PostController::class, 'edit'])->name('post.edit');
Route::get('post/update/{id}',[PostController::class, 'update'])->name('post.update');
Route::delete('post/delete/{id}',[PostController::class, 'destroy'])->name('post.destroy');

//Route::get('post/delete/{id}',[PostController::class, 'destroy']);  #worng proces



