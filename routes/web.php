<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// auth
Auth::routes();

// home page
Route::get('/', function () {
    return redirect()->route('home');
    // return redirect()->route('todo.index')->with('status', 'gratz'); gia na min to ksexaso
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//todos resource
Route::resource('todo', 'App\Http\Controllers\TodosController');