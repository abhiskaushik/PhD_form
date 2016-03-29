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

Route::get('/upload', function() {
  return View::make('upload');
});
Route::post('upload', 'testController@upload');

Route::get('/parsedoc', 'Doc2TextController@doc2text');

Route::get('admin', function()
    {
        return View::make('admin');
    });

Route::get('success', function()
    {
        return View::make('success');
    });


