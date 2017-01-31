<?php

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


use App\Note;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', 'NotesController@index');

Route::get('notes/create', 'NotesController@create');
Route::post('notes', 'NotesController@store');

Route::get('notes/{note}', 'NotesController@show')->where('note', '[0-9]+');