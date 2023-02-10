<?php

use App\Http\Controllers\Blog\Admin\UserController;
use App\Http\Controllers\Blog\User\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class)
        ->missing(function (Request $request) {
            return Redirect::route('users.index');
        });
    Route::resource('profiles', ProfileController::class)
        ->missing(function (Request $request) {
            return Redirect::route('profiles.index');
        });
});


