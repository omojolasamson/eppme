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
    return User::all();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form/{longitude}/{latitude}', [
    'uses' => 'PingController@getPostAdd',
    'as' => 'form'
]);

Route::post('/save', [
    'uses' => 'PingController@postForm',
    'as' => 'save'
]);

Route::get('/pingView', [
    'uses' => 'PingController@getPingView',
    'as' => '/pingView'
]);

Route::get('/allPings', [
    'uses' => 'PingController@getAllPing',
    'as' => '/allPings'
]);

Route::get('/allUsers', [
    'uses' => 'UserController@getAllUser',
    'as' => '/allUsers'
]);

Route::get('/fullPingView/{id}', [
    'uses' => 'PingController@getFullPing',
    'as' => 'fullPingView'
]);

Route::get('/userProfile/{id}', [
    'uses' => 'UserController@getUserProfile',
    'as' => 'userProfile'
]);

Route::get('/deletePing/{id}', [
    'uses' => 'PingController@getDeletePing',
    'as' => 'deletePing'
]);

Route::get('/markAsRead/{id}', [
    'uses' => 'PingController@postMarkAsRead',
    'as' => 'markAsRead'
]);