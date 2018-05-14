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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home','postController@all_posts')->name('home');
    Route::get('/groups','postController@group');
    Route::get('/group/{id}','postController@viewGroup');
    Route::post('/leavegroup/{id}','postController@leavegroup');
    Route::post('/joinGroup/{id}','postController@joinGroup');
    Route::post('/deleteGroup/{id}','postController@deleteGroup');
    Route::post('/AddGroup','postController@AddGroup');
    Route::post('/PostAdd','postController@PostAdd');
    Route::post('/addComment/{id}','postController@addComment')->name('addComment');;
    Route::post('/like/{id}','postController@like')->name('like');;
    Route::get('/edit','UserController@showeditprofile');
    Route::get('/myprofile','UserController@ProfileInfo');
    Route::get('/profile/{id}','UserController@profile');
    Route::post('/editprofile/{id}','UserController@editprofile');
    Route::post('/editprofile','UserController@editprofile2');
    Route::get('/showeditprofile','UserController@showeditprofile');
    Route::get('/grouptemp','postController@group_temp');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/friends','FriendController@friends');
    Route::post('/unfriend/{id}','FriendController@unfriend');
    Route::post('/acceptFriend/{id}','FriendController@acceptFriend');
    Route::post('/rejectFriend/{id}','FriendController@rejectFriend');
    Route::post('/addFriend/{id}','FriendController@addFriend');
    Route::get('/search','FriendController@search');
});


Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('welcme');
    });

    Route::get('/signin', function () {
        return view('signin');
    })->name('signin');

    Route::get('/signup','UserController@GetSignup')->name('signup');
    Route::post('/signup','UserController@PostSign');
    Route::get('/emailcheck','UserController@emailcheck');
    Auth::routes();
});


