<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ToDoController;

<<<<<<< HEAD


=======
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
   return redirect('/login');
});
>>>>>>> d8b6a21df94955d2ea3535fc6483fa339d69140e

Auth::routes();


Route::resource('note', NoteController::class);
Route::resource('todo', ToDoController::class);

Auth::routes();

<<<<<<< HEAD
Route::get('/note', [App\Http\Controllers\NoteController::class, 'index'])->name('note');
// Route::get('/note/create', [App\Http\Controllers\NoteController::class, 'create'])->name('create');
// //Route::get('/note/create', [App\Http\Controllers\NoteController::class, 'store'])->name('create');
// Route::post('/note/store','NoteController@store');

// Route::put('/note/{id}/edit', [NoteController::class, 'edit'])->name('edit');
//Route::post('/note/store', [App\Http\Controllers\NoteController::class, 'store'])->name('store');
//Route::put('/note/store', [App\Http\Controllers\NoteController::class, 'store'])->name('store');
=======
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

>>>>>>> d8b6a21df94955d2ea3535fc6483fa339d69140e

//api

Auth::routes();

Route::get('/weather', [App\Http\Controllers\WeatherApiController::class, 'index'])->name('weather')->middleware('auth');
// Route::get('/weather/current', ['as' => 'get.currentWeather', 'uses'=>'WeatherApiController@current']);
Route::get('/quote', [App\Http\Controllers\QuoteController::class, 'index'])->name('quote')->middleware('auth');
//
<<<<<<< HEAD
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');


Route::get('/react', function (){
   return view('react');
} )->name('news');
=======
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news')->middleware('auth');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> d8b6a21df94955d2ea3535fc6483fa339d69140e
