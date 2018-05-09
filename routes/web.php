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
Route::get('/', function () {
    return view('welcome');
});
*/


/* view routes */

Route::get('/welcme', function () {
    return view('welcme');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/home','postController@all_posts');

Route::get('/groups','postController@all_groups');

Route::get('/friends','postController@all_friends');


/* view routes */

