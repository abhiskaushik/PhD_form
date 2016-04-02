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

Route::get('/', function () {
    return view('index');
});

// Route::get('/upload', function () {
// 	return view('upload');
// });

// Route::post('upload', 'FileUploadController@upload');

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

Route::get('print/{regNo}', 'AdminController@printer' );

// Route::get('print', function()
//     {
//         return view('print');
//     });

// Route::get('/success', function()
//     {
//         return view('success');
//     });

Route::get('error', function()
    {
        return view('error');
    });
Route::get('admin/login', function()
    {
        return view('admin.login');
    });
// Route::post('/redirect', 'AdminController@adminView');

Route::get('/home', function()
    {
        return view('home');
    });
Route::get('/form', function()
    {
        return view('form');
    });
Route::get('/msc', function()
    {
        return view('msc');
    });

