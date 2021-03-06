<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',[
    'as'=>'homepage',
    'uses'=>'PageController@index'
]);
Route::get('homepage',[
    'as'=>'homepage',
    'uses'=>'PageController@index'
]);
Route::get('category',[
    'as'=>'category',
    'uses'=>'PageController@getCategory'
]);
Route::get('detail/{p_id}',[
    'as'=>'detail',
    'uses'=>'PageController@getDetail'
]);
Route::get('streaming/{p_id}',[
    'as'=>'streaming',
    'uses'=>'PageController@getStreaming'
]);
Route::get('admin',[
    'as'=>'admin',
    'uses'=>'PageController@getadmin'
]);
Route::get('getlogin',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::get('login',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::get('getsignup',[
    'as'=>'signup',
    'uses'=>'PageController@getSignup'
]);
Route::get('signup',[
    'as'=>'signup',
    'uses'=>'PageController@getSignup'
]);
Route::post('postsignup',[
    'as'=>'postsignup',
    'uses'=>'PageController@postSignup'
]);
Route::get('delete/{p_id}',[
    'as'=>'delete',
    'uses'=>'PageController@delete'
]);
Route::get('deleteUser/{p_id}',[
    'as'=>'deleteUser',
    'uses'=>'PageController@deleteUser'
]);
Route::get('edit/{p_id}',[
    'as'=>'edit',
    'uses'=>'PageController@edit'
]);
Route::post('editsubmit',[
    'as'=>'editsubmit',
    'uses'=>'PageController@editsubmit'
]);
Route::get('addFilm',[
    'as'=>'addFilm',
    'uses'=>'PageController@getAddFilm'
]);
Route::post('saveFilm',[
    'as'=>'saveFilm',
    'uses'=>'PageController@addFilm'
]);
Route::post('addComment',[
    'as'=>'addComment',
    'uses'=>'PageController@addComment'
]);
Route::get('deleteComment/{id}',[
    'as'=>'deleteComment',
    'uses'=>'PageController@deleteComment'
]);
Route::get('userM',[
    'as'=>'userM',
    'uses'=>'PageController@userM'
]);
Route::post('postLogin',[
    'as'=>'postLogin',
    'uses'=>'PageController@login'
]);
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'PageController@logout'
]);
Route::post('search',[
    'as'=>'search',
    'uses'=>'PageController@search'
]);
Route::post('reply',[
    'as'=>'reply',
    'uses'=>'PageController@reply'
]);
Route::get('wishlist/{id}',[
    'as'=>'wishlist',
    'uses'=>'PageController@like'
]);
Route::get('regetPass',[
    'as'=>'regetPass',
    'uses'=>'PageController@regetPass'
]);
Route::post('setPass',[
    'as'=>'setPass',
    'uses'=>'PageController@setPass'
]);
Route::get('list',[
    'as'=>'list',
    'uses'=>'PageController@getWishlist'
]);