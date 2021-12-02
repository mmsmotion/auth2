<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('category',CategoryController::class);

Route::get("/edit-info",[HomeController::class,'editProfile'])->name('home.edit');
Route::post("/update-info",[HomeController::class,'updateInfo'])->name('home.update');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
