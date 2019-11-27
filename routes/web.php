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
Route::get('care','RoomCareController@care')->name('care');

Route::get('user/meeting/{id}','personController@meet');

Route::get('login','personController@login');
Route::post('login','personController@postlogin');
Route::get('register','personController@register');
Route::post('register','personController@postRegister');
Route::get('logout','personController@logOut');

Route::get('user/news','postNewsController@new');
Route::post('user/news','postNewsController@postnew');






Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin')->name('admin.login');

Route::group(['prefix'=>'admin','middleware'=>'adminmiddleware'], function () {

    Route::get('logout','AdminController@logout');

    Route::group(['prefix'=>'dashboard'], function () {
        Route::get('','RoomsController@getIndex');
    });

    Route::group(['prefix'=>'room'], function () {
        Route::get('list','RoomsController@getList');
        Route::get('approve/{id}','RoomsController@ApproveMotelroom');
        Route::get('unapprove/{id}','RoomsController@UnApproveMotelroom');
        Route::get('del/{id}','RoomsController@Delroom');
    });

    Route::group(['prefix'=>'user'], function () {
        Route::get('list','AdminController@getList');
        Route::get('edit/{id}','AdminController@getUpdateUser');
        Route::post('edit/{id}','AdminController@postUpdateUser')->name('admin.user.edit');
        Route::get('del/{id}','AdminController@DeleteUser');
    });

    Route::group(['prefix'=>'roomtype'], function () {
        Route::get('list','RoomTypeController@getList');
        Route::get('edit/{id}','RoomTypeController@getEditRoomType');
        Route::post('edit/{id}','RoomTypeController@postEditRoomType');

        Route::get('new','RoomTypeController@getNewRoomType');
        Route::post('new','RoomTypeController@postNewRoomType');

        Route::get('del/{id}','RoomTypeController@Delete');
    });


    Route::group(['prefix'=>'roomservice'], function () {
        Route::get('list','ServicesController@getList');
        Route::get('edit/{id}','ServicesController@getEditServices');
        Route::post('edit/{id}','ServicesController@postEditServices');

        Route::get('new','ServicesController@getNewServices');
        Route::post('new','ServicesController@postNewServices');

        Route::get('del/{id}','ServicesController@Delete');
    });
});