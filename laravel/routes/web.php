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
    return view('welcome');
});
Route::any('Index/index', 'Index\IndexController@index');
Route::any('Index/user_add_show', 'Index\IndexController@user_add_show');
Route::any('Admin/index', 'Admin\AdminController@index');
Route::any('Admin/book_add_form', 'Admin\AdminController@book_add_form');
Route::any('Admin/book_manage', 'Admin\AdminController@book_manage');
Route::any('Admin/book_record', 'Admin\AdminController@book_record');
Route::any('Admin/user_add', 'Admin\AdminController@user_add');
Route::any('Admin/user_operate', 'Admin\AdminController@user_operate');