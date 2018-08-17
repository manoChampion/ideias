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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// ===============================================================================================
// CONTROLE DE ACESSO
// ===============================================================================================

// Roles Routes
Route::get('/acl/roles', 'RoleController@index')->name('view-roles');
Route::get('/acl/roles/create-role', 'RoleController@create')->name('create-role');
Route::post('/acl/roles/create-role', 'RoleController@create')->name('create-role');
Route::get('/acl/roles/{role_id}/delete', 'RoleController@delete')->name('delete-role');
Route::get('/acl/roles/{role_id}/update', 'RoleController@update')->name('update-role');
Route::post('/acl/roles/{role_id}/update', 'RoleController@update')->name('update-role');

// Permissions Routes
Route::get('/acl/permissions', 'PermissionController@index')->name('view-permissions');
Route::get('/acl/permissions/create-permission', 'PermissionController@create')->name('create-permission');
Route::post('/acl/permissions/create-permission', 'PermissionController@create')->name('create-permission');
Route::get('/acl/permissions/{permission_id}/delete', 'PermissionController@delete')->name('delete-permission');

// Users Routes
Route::get('/acl/users', 'UserController@index')->name('view-users');
Route::get('/acl/users/create-user', 'UserController@create')->name('create-user');
Route::post('/acl/users/create-user', 'UserController@create')->name('create-user');
Route::get('/acl/users/{user_id}/delete', 'UserController@delete')->name('delete-user');
Route::get('/acl/users/{user_id}/update', 'UserController@update')->name('update-user');
Route::post('/acl/users/{user_id}/update', 'UserController@update')->name('update-user');

// ===============================================================================================
// ESPECIALIZAÇÃO
// ===============================================================================================

//Fields Routes
Route::get('/esp/fields', 'FieldController@index')->name('view-fields');
Route::get('/esp/fields/create-field', 'FieldController@create')->name('create-field');
Route::post('/esp/fields/create-field', 'FieldController@create')->name('create-field');
Route::get('/esp/fields/{field_id}/delete', 'FieldController@delete')->name('delete-field');
Route::get('/esp/fields/{field_id}/update', 'FieldController@update')->name('update-field');
Route::post('/esp/fields/{field_id}/update', 'FieldController@update')->name('update-field');

//Courses Routes
Route::get('/esp/courses', 'CourseController@index')->name('view-courses');
Route::get('/esp/courses/create-course', 'CourseController@create')->name('create-course');
Route::post('/esp/courses/create-course', 'CourseController@create')->name('create-course');
Route::get('/esp/courses/{course_id}/delete', 'CourseController@delete')->name('delete-course');
Route::get('/esp/courses/{course_id}/update', 'CourseController@update')->name('update-course');
Route::post('/esp/courses/{course_id}/update', 'CourseController@update')->name('update-course');

// ===============================================================================================
// POSTS
// ===============================================================================================
//Tipoes de Post
Route::get('/type-post', 'TypePostController@index')->name('view-type-post');
Route::get('/type-post/create', 'TypePostController@create')->name('create-type-post');
Route::post('/type-post/create', 'TypePostController@create')->name('create-type-post');
Route::get('/type-post/{type_id}/delete', 'TypePostController@delete')->name('delete-type-post');
Route::get('/type-post/{type_id}/update', 'TypePostController@update')->name('update-type-post');
Route::post('/type-post/{type_id}/update', 'TypePostController@update')->name('update-type-post');





Route::get('/posts', 'PostController@index')->name('view-posts');