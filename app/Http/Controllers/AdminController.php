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
        		$candidates = Candidates::all()->toArray();
        		$ugDetails = Ug::all()->toArray();
        		$pgDetails = Pg::all()->toArray();
        		$ddDetails = DD::all()->toArray();
        		$otherDetails = Other::all()->toArray();
        		$data = array('candidates' => $candidates,
        						'ug' => $ugDetails,
        						'pg' => $pgDetails,
        						'dd' => $ddDetails,
        						'others' => $otherDetails
        						);
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
		// return "Hello World";
		$reg_number = $request->input('regNo');
		// echo $reg_number;
		// dd($reg_number);
		Candidates::where('registrationNumber', $reg_number)
					->update(['deleted' => true]);
		$candidates = Candidates::all()->toArray();
        $ugDetails = Ug::all()->toArray();
        $pgDetails = Pg::all()->toArray();
        $ddDetails = DD::all()->toArray();
        $otherDetails = Other::all()->toArray();
        $data = array('candidates' => $candidates,
        				'ug' => $ugDetails,
        				'pg' => $pgDetails,
        				'dd' => $ddDetails,
        				'others' => $otherDetails
        				);
	    // return View::make('admin')->with('data', $data);
	    return json_encode($reg_number);
		// echo $request->input('reg_number');
		// $data = json_decode(file_get_contents('details.json'));
		
	}
	public function printer($reg_number)
	{
	
		$candidates = Candidates::where('registrationNumber', $reg_number)
								->first();
		// dd($candidates['registrationNumber']);
		if(!$candidates)
		{
			$message = 'Invalid registration number';
			return View::make('error')->with('message', $message);
		}								
        $ugDetails = Ug::where('registrationNumber', $reg_number)
								->first();
        $pgDetails = Pg::where('registrationNumber', $reg_number)
								->first();
        $ddDetails = DD::where('registrationNumber', $reg_number)
								->first();
        $otherDetails = Other::where('registrationNumber', $reg_number)
								->first();
        $data = array('candidates' => $candidates,
        				'ug' => $ugDetails,
        				'pg' => $pgDetails,
        				'dd' => $ddDetails,
        				'others' => $otherDetails
        				);
        // dd($data);
	    return View::make('print')->with('data', $data);
	    // echo "heel";
	    // return ($reg_number);
	}
	
}
