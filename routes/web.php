<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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

// Route::get('/', function () {
//     return view('Pages.index');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\PostController@index', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/','App\Http\Controllers\PagesController@index'); 

// Route::resource('posts', 'App\Http\Controllers\PostController');
// ->middleware('auth');
// Route::get('dashboard', 'App\Http\Controllers\PostController@index');


Route::get('posts','App\Http\Controllers\PostController@index')->name('posts');
Route::get('posts/create','App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('posts/store','App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('posts/{post}/edit','App\Http\Controllers\PostController@edit')->name('posts.edit');
Route::put('posts/{post}/update','App\Http\Controllers\PostController@update')->name('posts.update');
Route::delete('posts/{post}','App\Http\Controllers\PostController@destroy')->name('posts.destroy');
