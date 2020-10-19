<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

// Route::resource('pages', 'PagesController');
Route::get('show',[PagesController::class,'index'])->middleware('auth');
Route::get('edit/{id}',[PagesController::class,'show'])->middleware('auth');
Route::post('edit',[PagesController::class,'update'])->middleware('auth');
Route::get('delete/{id}',[PagesController::class,'destroy'])->middleware('auth');

Route::get('/profile', [PagesController::class,'profile'])->middleware('auth');