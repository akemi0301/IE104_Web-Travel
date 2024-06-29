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

Route::get('/', 'AdminController@login');
Route::post('/', 'AdminController@postLoginAdmin');

Route::get('/home', function () {
    return view('home');
});

Route::prefix('danhmuc')->group(function () {
    Route::get('/', [
        'as' => 'danhmuc.index',
        'uses' => 'DanhMucController@index'
    ]);
    Route::get('/create', [
        'as' => 'danhmuc.create',
        'uses' => 'DanhMucController@create'
    ]);
    Route::post('/store', [
        'as' => 'danhmuc.store',
        'uses' => 'DanhMucController@store'
    ]);
    Route::get('/edit{id}', [
        'as' => 'danhmuc.edit',
        'uses' => 'DanhMucController@edit'
    ]);
    Route::post('/update{id}', [
        'as' => 'danhmuc.update',
        'uses' => 'DanhMucController@update'
    ]);
    Route::get('/delete{id}', [
        'as' => 'danhmuc.delete',
        'uses' => 'DanhMucController@delete'
    ]);
});
Route::prefix('menu')->group(function () {
    Route::get('/', [
        'as' => 'menu.index',
        'uses' => 'MenuController@index'
    ]);
    Route::get('/create', [
        'as' => 'menu.create',
        'uses' => 'MenuController@create'
    ]);
    Route::post('/store', [
        'as' => 'menu.store',
        'uses' => 'MenuController@store'
    ]);
    Route::get('/edit{id}', [
        'as' => 'menu.edit',
        'uses' => 'MenuController@edit'
    ]);
    Route::post('/update{id}', [
        'as' => 'menu.update',
        'uses' => 'MenuController@update'
    ]);
    Route::get('/delete{id}', [
        'as' => 'menu.delete',
        'uses' => 'MenuController@delete'
    ]);

});
