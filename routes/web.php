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
use Illuminate\Support\Facades\Route;

//larevel框架的欢迎界面
Route::view('/welcome','welcome');

/*************************************登录项目************************************/
//我的登录界面
Route::view('/login', 'user/login');
//用户登录
Route::post('user/login', 'UserController@login');
//用户注册页面
Route::view('user/signin','user/signin');
//用户注册
Route::post('user/signinToDB','UserController@signinToDB');
//用户删除操作
Route::get('user/delete/{id}', 'UserController@delete');
//用户修改页路由
Route::get('user/update/{id}', 'UserController@update');
//用户修改操作
Route::post('user/updateA', 'UserController@updateA');
//退出登录
Route::get('user/logout','UserController@logout');

/***************************************Laravel 入门教程*************************************** */
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');







