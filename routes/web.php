<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuteursController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\MessagesController;

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

Route::get('/', [BlogController::class, 'index']);
Route::get('utilisateurs', [BlogController::class, 'afficheNom']);
Route::post('utilisateurs', [BlogController::class, 'store']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/messages', MessagesController::class);
Route::get('admin/messages/{message}', 'App\Http\Controllers\Admin\MessagesController@destroy');

Route::resource('/admin/users', UsersController::class);
Route::get('admin/users/{user}', 'App\Http\Controllers\Admin\UsersController@destroy');

Route::resource('auteur', AuteursController::class);
 