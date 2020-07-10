<?php
use Illuminate\Http\Request;
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

Route::get('/todos','TodoController@index')->name('todo.index');

// Route::get('/todos/create','TodoController@create');

// Route::post('/todos/create','TodoController@store');

// Route::get('/todos/{todo}/edit','TodoController@edit');

// Route::patch('/todos/{todo}/update','TodoController@update')->name('todo.update');

// Route::delete('/todos/{todo}/delete','TodoController@delete')->name('todo.delete');

Route::resource('/todo','TodoController');

Route::put('/todos/{todo}/complete','TodoController@complete')->name('todo.complete');

Route::delete('/todos/{todo}/incomplete','TodoController@incomplete')->name('todo.incomplete');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user','UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload','UserController@uploadAvatar');
