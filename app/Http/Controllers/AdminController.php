<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Validator;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DD;
use App\Candidates;
use App\Ug;
use App\Pg;
use App\Other;

class AdminController extends Controller
{
	public function adminView()
	{
		// echo 'hey';
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
    	{
    		$message = 'Please fill in all the details';
			return View::make('error')->with('message', $message);
    	}
        else
        {
        	$username = Input::get('username');
        	$password = Input::get('password');

        	if($username == 'blah' && $password == 'blah')
        	{
        		// $data = json_decode(file_get_contents('details.json'));
        		$candidates = Candidates::all();
        		dd($candidates);
	    		return View::make('admin')->with('data', $data);
        	}
        	else
        	{
        		$message = 'Username or Password is incorrect';
				return View::make('error')->with('message', $message);
        	}
        }
	}

	public function deleted(Request $request)
	{	
		echo $request->input('reg_number');
		$data = json_decode(file_get_contents('details.json'));
		
	}
}