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

Route::get('/upload', function () {
	return view('upload');
});

Route::post('upload', 'FileUploadController@upload');

Route::get('admin', 'AdminController@adminView'); 

Route::get('/success', 'ValidationController@validate'); 

// Route::get('/success', function()
//     {
//         return view('success');
//     });
Route::get('error', function()
    {
        return view('error');
    });
Route::get('login', function()
    {
        return view('login');
    });
Route::get('/home', function()
    {
        return view('home');
    });
Route::get('/phd', function()
    {
        return view('phd');
    });
Route::get('/msc', function()
    {
        return view('msc');
    });

