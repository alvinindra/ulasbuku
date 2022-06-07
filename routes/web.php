<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
Route::get('admin',  [AdminController::class, 'index'])->name('admin');
Route::get('admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
Route::get('{page}', [PageController::class, 'indexAdmin'])->name('admin.page.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
