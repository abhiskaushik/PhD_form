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

Route::post('admin/auth', 'AdminController@login');
Route::group(['middleware' => 'adminauth'], function () {
    Route::get('admin/home', function()
        {
            return view('admin.home');
        });
    Route::get('admin/{phdormsc}', 'AdminController@adminView');
    Route::get('admit/{phdormsc}/{regNo}', 'AdminController@admitCard');
    Route::post('delete', 'AdminController@deleted' );
    Route::post('accept', 'AdminController@accepted');
    Route::get('logout', 'AdminController@logout');
});
Route::get('print/{phdormsc}/{regNo}', 'AdminController@printer' );

Route::post('phdvalidate', 'PhdController@validated');
Route::post('msvalidate', 'MsController@validated');
Route::post('application', 'ApplicationController@view');
Route::get('view', function() {
    return view('view');
});
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
Route::get('phd', function()
    {
        return view('phd');
    });
Route::get('ms', function()
    {
        return view('ms');
    });