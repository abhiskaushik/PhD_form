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
});
Route::post('delete', 'AdminController@deleted' );
Route::post('accept', 'AdminController@accepted');
Route::get('print/{phdormsc}/{regNo}', 'AdminController@printer' );

Route::post('phdvalidate', 'PhdController@validated');
Route::post('msvalidate', 'MsController@validated');
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
Route::get('test', function()
    {
        return view('test');
    });
Route::post('change', function()
    {
        dd(Input::get('ra1'));
    });

Route::get('admit/{phdormsc}/{regNo}', 'AdminController@admitCard');

