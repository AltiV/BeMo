<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ValidationController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/contact-us.php', function () {
        return view('contact-us');
    });

    Route::post('validate', [ValidationController::class, 'validateData']);

    Route::view("contact-us", "validate");

    Route::get('/panel', [App\Http\Controllers\PanelController::class, 'index'])->name('panel');
});

Auth::routes();
