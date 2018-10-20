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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => ['auth'],'namespace' => 'admin'], function () {
    // Route::get('deshboard',);
    Route::get('/deshboard','IndexController@index')->name('deshboard');
    //All route goes to this group for User
    Route::group(['namespace' => 'user'], function(){
    	Route::get('User/Registration','UserController@registration')->name('user_registration');
    	//Route for user search
    	Route::get('User/Search','UserController@userSearch')->name('user_search');
    	//Route for manage user
    	Route::get('User/Manage','UserController@userManage')->name('manage_user');
    });
    //All route goes to this group for Api
    Route::group(['namespace' => 'api'], function(){
    	Route::get('/api','ApiController@addApi')->name('addapi');
    	Route::get('/api/switch','ApiController@apiSwitch')->name('apiswitch');
    });

    //All route goes to this group for all slabs
    Route::group(['namespace' => 'slabs'], function(){
    	Route::get('/user/slabs','SlabController@newSlab')->name('addslab');
    	
    });
    
});
Route::get('/home', 'HomeController@index')->name('home');
