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

/*Route::get('/', function () {
    return view('welcome');
});*/

/* Route::get('/', function () {
//     return view('frontend.home');
 });*/


Route::view('/', 'frontend.home')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/contact', 'frontend.contact')->name('contact');

Route::controller(PostController::class)->name('post.')->group(function () {

Route::get('posts', 'index')->name('index');
Route::get('post/create','create')->name('create');
Route::post('post/store','store')->name('store');
Route::get('post/show/{id}', 'show')->name('show');
Route::get('post/edit/{id}', 'edit')->name('edit');
Route::get('post/update/{id}', 'update')->name('update');
Route::delete('post/delete/{id}', 'destroy')->name('destroy');

//Route::get('post/delete/{id}',[PostController::class, 'destroy']);  #worng proces
});


