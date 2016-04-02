<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Validator;
use Input;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DD;
use App\Candidates;
use App\Ug;
use App\Pg;
use App\Other;
use paginate;
use Session;

class AdminController extends Controller
{
    public function login(Request $request)
    {
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
                Session::put('userName', $username);
                // $data = json_decode(file_get_contents('details.json'));
                return redirect('admin/home');
            }
            else
            {
                $message = 'Username or Password is incorrect';
                return View::make('error')->with('message', $message);
            }
        }
    }

	public function adminView($phdormsc)
	{
        $candidates = Candidates::where('deleted', false)
                                    ->where('phdormsc', $phdormsc)
                                    ->paginate(2);
        $candidates_id= $candidates->lists('registrationNumber');
        // dd($candidates_id);
                $ugDetails = Ug::whereIn('registrationNumber', $candidates_id)->get();
                $pgDetails = Pg::whereIn('registrationNumber', $candidates_id)->get();
                $ddDetails = DD::whereIn('registrationNumber', $candidates_id)->get(); 
                $otherDetails = Other::whereIn('registrationNumber', $candidates_id)->get();
                // dd($candidates[0]->registrationNumber);
                $data = array('candidates' => $candidates,
                                'ug' => $ugDetails,
                                'pg' => $pgDetails,
                                'dd' => $ddDetails,
                                'others' => $otherDetails
                                );
                // json_encode($data);
                return View::make('admin/'.$phdormsc)->with('data', $data);
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
        $pdf = PDF::loadView('print', $data);
        return response($pdf->output())
        				->header('Content-Type', 'application/pdf');
        // dd($data);
	    // return View::make('print')->with('data', $data);
	    // echo "heel";
	    // return ($reg_number);
	}
	
}
