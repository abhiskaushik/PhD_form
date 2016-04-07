<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => 'adminauth'], function () {
    Route::get('admin/home', function()
        {
            return view('admin.home');
        });
    Route::get('admin/{phdormsc}', 'AdminController@adminView');
});

Route::post('admin/auth', 'AdminController@login');

Route::post('success', 'ValidationController@validated');

Route::post('delete', 'AdminController@deleted' );
Route::post('accept', 'AdminController@accepted');

Route::get('print/{regNo}', 'AdminController@printer' );

Route::get('error', function()
    {
        return view('error');
    });

Route::get('contact', function()
    {
        return view('contact');
    });

Route::get('login', function()
    {
        return view('admin.login');
    });

Route::get('home', function()
    {
        return view('home');
    });
Route::get('form', function()
    {
        return view('form');
    });

