<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ToDoController;

use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
   return redirect('/login');
});

Auth::routes();


Route::resource('note', NoteController::class);
Route::resource('todo', ToDoController::class);

Auth::routes();

Route::get('/note', [App\Http\Controllers\NoteController::class, 'index'])->name('note')->middleware('auth');
Route::get('/note/create', [App\Http\Controllers\NoteController::class, 'create'])->name('create')->middleware('auth');
Route::post('/note/store','NoteController@store')->middleware('auth');
Route::put('/note/{id}/edit', [NoteController::class, 'edit'])->name('edit')->middleware('auth');
Route::get('/todo/{id}', [App\Http\Controllers\noteController::class, 'index'])->name('note')->middleware('auth');//tutaj moga byc errory!!!

Route::get('/todo', [App\Http\Controllers\ToDoController::class, 'index'])->name('todo')->middleware('auth');
Route::get('/todo/create', [App\Http\Controllers\ToDoController::class, 'create'])->name('create')->middleware('auth');
Route::post('/todo/store','ToDoController@store')->middleware('auth');
Route::put('/todo/{id}/edit', [ToDoController::class, 'edit'])->name('edit')->middleware('auth');
Route::get('/todo/{id}', [App\Http\Controllers\ToDoController::class, 'index'])->name('todo')->middleware('auth');//tutaj moga byc errory!!!


//api

Auth::routes();

Route::get('/weather', [App\Http\Controllers\WeatherApiController::class, 'index'])->name('weather')->middleware('auth');
// Route::get('/weather/current', ['as' => 'get.currentWeather', 'uses'=>'WeatherApiController@current']);
Route::get('/quote', [App\Http\Controllers\QuoteController::class, 'index'])->name('quote')->middleware('auth');
//
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news')->middleware('auth');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
