<?php

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

});
//ログインとか良い感じに
Auth::routes();
//
////
//Route::get('/home', 'HomeController@index')->name('home');

///newrecipeのページでは　new.blade.phpを表示
Route::get('/newrecipe','newrecipeController@index');

Route::post('/confirm','confirmController@index');

Route::get('/','topController@index');

Route::get('/recipe','recipeController@session');

Route::get('/recipe-id','idController@index');

Route::get('/updateform','updateformController@index');

Route::post('/update','updateController@index');

Route::get('/delete','deleteController@index');

Route::get('/erase','eraseController@index');

//ルート設定は１行コントローラを作る。処理はそちらで
