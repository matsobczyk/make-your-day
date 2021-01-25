<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


//Route::get('/', function () {
   // return view('welcome');
//});

Auth::routes();


Route::resource('note', NoteController::class);


Auth::routes();

Route::get('/note', [App\Http\Controllers\NoteController::class, 'index'])->name('note');
Route::get('/note/create', [App\Http\Controllers\NoteController::class, 'create'])->name('create');
//Route::get('/note/create', [App\Http\Controllers\NoteController::class, 'store'])->name('create');
Route::post('/note/store','NoteController@store');

Route::put('/note/{id}/edit', [NoteController::class, 'edit'])->name('edit');
//Route::post('/note/store', [App\Http\Controllers\NoteController::class, 'store'])->name('store');
//Route::put('/note/store', [App\Http\Controllers\NoteController::class, 'store'])->name('store');

//api

Auth::routes();

Route::get('/weather', [App\Http\Controllers\WeatherApiController::class, 'index'])->name('weather');
Route::get('/weather/current', ['as' => 'get.currentWeather', 'uses'=>'WeatherApiController@current']);