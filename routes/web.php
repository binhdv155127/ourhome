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

Route::get('ad1',function(){
    return view('admin.pages.index');
});


Route::get('/','homeController@index');
Route::get('room/{id}','pageDetailController@index');
Route::get('ward/{idDistrict}','homeController@ajax');
Route::get('search','pageDetailController@search');
Route::get('person/{id}','personController@user');
Route::get('rate/{id}','personController@rate');
Route::get('rateroom/{id}','pageDetailController@rate');
Route::get('modifyinfor/{id}','personController@update');

Route::get('user/meeting/{id}','personController@meet');

Route::get('login','personController@login');
Route::post('login','personController@postlogin');
Route::get('logout','personController@logOut');

Route::get('user/news','postNewsController@new');
Route::post('user/news','postNewsController@postnew');
