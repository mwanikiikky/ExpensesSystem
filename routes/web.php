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

/*Route::get('/', function () {
    //return view('welcome');
    return 'MENU';
});

Route::get('/menu',function(){
    return view('Pages.menu');
});

Route::get('/menu',function(){
    return view('Pages.menu');
});
*/

Route::get('/index', 'PagesController@index');
Route::get('/cart', 'PagesController@cart');
Route::get('/foodAdmin', 'PagesController@foodAdmin');
Route::get('/order', 'PagesController@order');
Route::get('/Total', 'PagesController@Total');


Route::resource('posts','PostsController');

