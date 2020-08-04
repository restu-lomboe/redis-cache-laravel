<?php

use Illuminate\Http\Request;

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

Route::namespace('Auth')->group(function(){

    Route::post('register', 'RegisterController@register');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');

});

Route::get('user', 'Frontend\UserController@index');

Route::post('student', 'Frontend\StudentController@store');

Route::post('book', 'Frontend\BookController@store');

Route::post('peminjaman-buku', 'Frontend\BorrowingBookController@store');

Route::middleware(['admin'])->group(function(){
    Route::post('update-peminjaman-buku/{id}', 'Frontend\BorrowingBookController@update');
});





