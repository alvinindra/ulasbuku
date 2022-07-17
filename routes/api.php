<?php

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
Route::get('/books', 'App\Http\Controllers\Api\BooksController@index');
Route::get('/books/{slug}', 'App\Http\Controllers\Api\BooksController@show');
Route::get('/books/{slug}/reviews', 'App\Http\Controllers\Api\BooksController@listReviews');

Route::get('/review/{slug}', 'App\Http\Controllers\Api\ReviewController@show');

Route::get('/category', 'App\Http\Controllers\Api\CategoryController@index');

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/review', 'App\Http\Controllers\Api\ReviewController@store');
    Route::post('/review/{slug}', 'App\Http\Controllers\Api\ReviewController@edit');

    Route::get('/profile', 'App\Http\Controllers\Api\AuthController@profile');
    Route::get('/user/reviews', 'App\Http\Controllers\Api\AuthController@listReviews');
    
    Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
});