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
/*//1) Ввсе книги
2) одна книга
3) Создать
4) Удалить
5) редактировать*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'books'], function () {
    Route::get('/all', 'BooksController@all');
    Route::get('/{id}', 'BooksController@id');
    Route::post('/create', 'BooksController@create');
    Route::delete('/delete', 'BooksController@delete');
    Route::put('/update', 'BooksController@update');
});
