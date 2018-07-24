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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::get('/home', 'HomeController@index')->name('home');

// Roles Routes

Route::get('/acl/roles', 'RoleController@index')->name('view-roles');
Route::get('/acl/roles/create-role', 'RoleController@create')->name('create-role');
Route::post('/acl/roles/create-role', 'RoleController@create')->name('create-role');
Route::get('/acl/roles/{id_role}/delete', 'RoleController@delete')->name('delete-role');

// Permissions Routes
Route::get('/acl/permissions', 'PermissionController@index')->name('view-permissions');
Route::get('/acl/permissions/create-permission', 'PermissionController@create')->name('create-permission');
Route::post('/acl/permissions/create-permission', 'PermissionController@create')->name('create-permission');
Route::get('/acl/permissions/{id_permission}/delete', 'PermissionController@delete')->name('delete-permission');

// Users Routes
Route::get('acl/users', 'UserController@index')->name('view-users');

Route::get('/acl/users/create-user', 'UserController@create')->name('create-user');
Route::post('/acl/users/create-user', 'UserController@create')->name('create-user');

Route::get('/acl/users/{id_user}/delete', 'UserController@delete')->name('delete-user');

Route::get('/acl/users/{id_user}/update', 'UserController@update')->name('update-user');
Route::post('/acl/users/{id_user}/update', 'UserController@update')->name('update-user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
