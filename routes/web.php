<?php

use App\Events\eventTrigger;


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

Route::get('/alertBox', function () {
    return view('eventListener');
});

Route::get('/fireEvent', function () {
    event(new eventTrigger());
});







Auth::routes();
Route::get('/', function() {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {


// URLs Redirecionadas
Route::redirect('/app', '/app/feed', 301);
Route::redirect('/feed', '/app/feed', 301);
Route::redirect('/home', '/admin/home', 301);

// ===============================================================================================
// 
// ===============================================================================================
// ===============================================================================================
//                                      ADMIN ROUTES
// ===============================================================================================
// ===============================================================================================
// 
// ===============================================================================================


Route::namespace('Admin')->group(function () {

    Route::prefix('admin')->group(function () {

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
    //Post Types Routes
    Route::get('/type-post', 'TypePostController@index')->name('view-type-post');
    Route::get('/type-post/create', 'TypePostController@create')->name('create-type-post');
    Route::post('/type-post/create', 'TypePostController@create')->name('create-type-post');
    Route::get('/type-post/{type_id}/delete', 'TypePostController@delete')->name('delete-type-post');
    Route::get('/type-post/{type_id}/update', 'TypePostController@update')->name('update-type-post');
    Route::post('/type-post/{type_id}/update', 'TypePostController@update')->name('update-type-post');

    //Posts Routes
    Route::get('/posts', 'PostController@index')->name('view-posts');
    Route::get('/posts/create-post', 'PostController@create')->name('create-post');
    Route::post('/posts/create-post', 'PostController@create')->name('create-post');
    Route::get('/posts/{post_id}/delete', 'PostController@delete')->name('delete-post');
    Route::get('/posts/{post_id}/update', 'PostController@update')->name('update-post');
    Route::post('/posts/{post_id}/update', 'PostController@update')->name('update-post');

    // ===============================================================================================
    // INSTITUTIONS
    // ===============================================================================================
    //Institutions Routes
    Route::get('/institutions', 'InstitutionController@index')->name('view-institutions');
    Route::get('/institutions/create', 'InstitutionController@create')->name('create-institution');
    Route::post('/institutions/create', 'InstitutionController@create')->name('create-institutions');
    Route::get('/institutions/{institution_id}/delete', 'InstitutionController@delete')->name('delete-institution');
    Route::get('/institutions/{institution_id}/update', 'InstitutionController@update')->name('update-institution');
    Route::post('/institutions/{institution_id}/update', 'InstitutionController@update')->name('update-institution');
    });

});

// ===============================================================================================
// 
// ===============================================================================================
// ===============================================================================================
//                                      APP ROUTES
// ===============================================================================================
// ===============================================================================================
// 
// ===============================================================================================

Route::namespace('App')->group(function () {
    Route::prefix('app')->group(function () {

        
        // ===============================================================================================
        // Feed Routes
        // ===============================================================================================

        Route::get('feed', 'FeedController@index')->name('feed');
        Route::post('publish', 'FeedController@publishPost')->name('publishPost');
        Route::post('create-post', 'FeedController@create')->name('teste');

    });
});

});