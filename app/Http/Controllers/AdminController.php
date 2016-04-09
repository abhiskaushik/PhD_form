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

use Illuminate\Support\Facades\Mail;


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
                                    ->paginate(6);
        $candidates_id= $candidates->lists('registrationNumber');
                $ugDetails = Ug::whereIn('registrationNumber', $candidates_id)->get();
                $pgDetails = Pg::whereIn('registrationNumber', $candidates_id)->get();
                $ddDetails = DD::whereIn('registrationNumber', $candidates_id)->get(); 
                $otherDetails = Other::whereIn('registrationNumber', $candidates_id)->get();
                $data = array('candidates' => $candidates,
                                'ug' => $ugDetails,
                                'pg' => $pgDetails,
                                'dd' => $ddDetails,
                                'others' => $otherDetails
                                );
                return View::make('admin/'.$phdormsc)->with('data', $data);
	}

	public function deleted(Request $request)
	{	
		$reg_number = $request->input('regNo');
		Candidates::where('registrationNumber', $reg_number)
					->update(['deleted' => true]);


        $user = Candidates::select('name', 'email')
                    ->where('registrationNumber', $reg_number)
                    ->first();

        Mail::send('emails.reminder', ['user' => $user->name], function ($m) {
            $m->to('rituljain003@gmail.com', $user->name)->subject('Greetings from NITT!');
        });


	    return json_encode($reg_number);
		
	}

    public function accepted(Request $request)
    {
        $reg_number = $request->input('regNo');
        Candidates::where('registrationNumber', $reg_number)
                    ->update(['accepted' => true]);

        $user = Candidates::select('name', 'email')
                    ->where('registrationNumber', $reg_number)
                    ->first();

        Mail::send('emails.reminder', ['user' => $user->name], function ($m) {
            $m->to($user->email, $user->name)->subject('Greetings form NIT, Trichy!');
        });

        return json_encode($reg_number);
    }

	public function printer($reg_number)
	{
	
		$candidates = Candidates::where('registrationNumber', $reg_number)
								->first();
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
	}
	
}
