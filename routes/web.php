<?php

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

//Route::get('/', function () {
   // return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'NoteController@index');
Route::resource('notes', NoteController::class);

Auth::routes();

//Route::get('/note', [App\Http\Controllers\NoteController::class, 'index'])->name('note');
//Route::get('/note/create', [App\Http\Controllers\NoteController::class, 'create'])->name('create');


//Route::get('note/create', array('uses' => 'NoteController@index', 'as' => 'note/create'));