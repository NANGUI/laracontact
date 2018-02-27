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

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/groups', [
        'uses' => 'GroupController@store',
        'as' => 'groups'
    ]);

    Route::get('/group/show/{group}', [
        'uses' => 'GroupController@show',
        'as' => 'group.show'
    ]);

    Route::get('/group/edit/{group}', [
        'uses' => 'GroupController@edit',
        'as' => 'group.edit'
    ]);

    Route::post('/group/update/{group}', [
        'uses' => 'GroupController@update',
        'as' => 'group.update'
    ]);

    Route::get('/group/delete/{group}', [
        'uses' => 'GroupController@destroy',
        'as' => 'group.delete'
    ]);

    Route::get('/contacts', [
        'uses' => 'ContactController@index',
        'as' => 'contacts'
    ]);

    Route::get('/contact/edit/{contact}', [
        'uses' => 'ContactController@edit',
        'as' => 'contact.edit'
    ]);

    Route::get('/contact/show/{contact}', [
        'uses' => 'ContactController@show',
        'as' => 'contact.show'
    ]);

    Route::get('/contact/delete/{contact}', [
        'uses' => 'ContactController@destroy',
        'as' => 'contact.delete'
    ]);

    Route::post('/contacts', [
        'uses' => 'ContactController@store',
        'as' => 'contact.store'
    ]);

    Route::post('/contact/update/{contact}', [
        'uses' => 'ContactController@update',
        'as' => 'contact.update'
    ]);


});