<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('notes', 'NoteController@getAllNotes');

Route::post('notes', 'NoteController@store');

Route::get('to_dos', 'ToDoController@getAllTodos');

Route::post('to_dos', 'ToDoController@store');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
