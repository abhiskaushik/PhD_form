<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Validator;
use Input;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Phd;
use App\PhdUg;
use App\PhdPg;
use App\PhdOther;
use App\PhdPro;
use App\Ms;
use App\MsUg;
use App\MsScores;
use App\MsPro;
use App\Admin;
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

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            $message = 'Please fill in all the details';
            return View::make('error')->with('message', $message);
        }
        else
        {
            $username = $request->input('username');
            $password = $request->input('password');

            $auth = Admin::where('userName', $username)
                ->where('password', $password)
                ->first();

            if(count($auth) > 0)
            {
                Session::put('userName', $username);
                Session::put('dept', $auth->dept);
                return view('admin/home');
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
        Session::put('phdormsc', $phdormsc);
        if($phdormsc == 'phd')
        {
            $candidates = Phd::where('deleted', false)
                                        ->where('dept', Session::get('dept'))
                                        ->paginate(6);
            $candidates_id = $candidates->lists('applNo');
            $ugDetails = PhdUg::whereIn('applNo', $candidates_id)->get();
            $pgDetails = PhdPg::whereIn('applNo', $candidates_id)->get(); 
            $otherDetails = PhdOther::whereIn('applNo', $candidates_id)->get();
            $proDetails = PhdPro::whereIn('applNo', $candidates_id)->get();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'pg' => $pgDetails,
                            'others' => $otherDetails,
                            'pro' => $proDetails
                            );
            return View::make('admin/'.$phdormsc)->with('data', $data);
        }
        else
        {
            $candidates = Ms::where('deleted', false)
                                        ->where('dept', Session::get('dept'))
                                        ->paginate(6);
            $candidates_id = $candidates->lists('applNo');
            $ugDetails = MsUg::whereIn('applNo', $candidates_id)->get(); 
            $otherDetails = MsOther::whereIn('applNo', $candidates_id)->get();
            $scores = MsScores::whereIn('applNo', $candidates_id)->get();
            $proDetails = MsPro::whereIn('applNo', $candidates_id)->get();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'scores' => $scores,
                            'pro' => $proDetails
                            );
            return View::make('admin/'.$phdormsc)->with('data', $data);
        }
	}

	public function deleted(Request $request)
	{	
		$reg_number = $request->input('regNo');
        $phdormsc = Session::get('phdormsc');
        if($phdormsc == 'phd')
        {
            Phd::where('registrationNumber', $reg_number)
                    ->update(['deleted' => true]);

            $user = Phd::select('name', 'email')
                                ->where('registrationNumber', $reg_number)
                                ->first();

            Mail::send('emails.reminder', ['user' => $user->name], function ($m) {
                $m->to($user->email, $user->name)->subject('Greetings from NITT!');
            });


            return json_encode($reg_number);
        }
        else
        {
            Ms::where('registrationNumber', $reg_number)
                    ->update(['deleted' => true]);

            $user = Ms::select('name', 'email')
                                ->where('registrationNumber', $reg_number)
                                ->first();

            Mail::send('emails.reminder', ['user' => $user->name], function ($m) {
                $m->to($user->email, $user->name)->subject('Greetings from NITT!');
            });


            return json_encode($reg_number);
        }
	}

    public function accepted(Request $request)
    {
        $reg_number = $request->input('regNo');
        $phdormsc = Session::get('phdormsc');
        if($phdormsc == 'phd')
        {
            Phd::where('registrationNumber', $reg_number)
                    ->update(['accepted' => true]);

            $user = Phd::select('name', 'email')
                                ->where('registrationNumber', $reg_number)
                                ->first();

            Mail::send('emails.reminder', ['user' => $user->name], function ($m) {
                $m->to($user->email, $user->name)->subject('Greetings from NITT!');
            });


            return json_encode($reg_number);
        }
        else
        {
            Ms::where('registrationNumber', $reg_number)
                    ->update(['accepted' => true]);

            $user = Ms::select('name', 'email')
                                ->where('registrationNumber', $reg_number)
                                ->first();

            Mail::send('emails.reminder', ['user' => $user->name], function ($m) {
                $m->to($user->email, $user->name)->subject('Greetings from NITT!');
            });


            return json_encode($reg_number);
        }
    }

	public function printer($reg_number, $phdormsc)
	{
	    if($phdormsc == 'phd')
        {
            $candidates = Phd::where('registrationNumber', $reg_number)
                                ->first();
            if(!$candidates)
            {
                $message = 'Invalid registration number';
                return View::make('error')->with('message', $message);
            }                               
            $ugDetails = PhdUg::where('registrationNumber', $reg_number)
                                    ->first();
            $pgDetails = PhdPg::where('registrationNumber', $reg_number)
                                    ->first();
            $otherDetails = PhdOther::where('registrationNumber', $reg_number)
                                    ->first();
            $proDetails = PhdPro::where('registrationNumber', $reg_number)
                                    ->first();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'pg' => $pgDetails,
                            'others' => $otherDetails,
                            'pro' => $proDetails
                            );
            $pdf = PDF::loadView('print', $data);
            return response($pdf->output())
                            ->header('Content-Type', 'application/pdf');
        }
        else
        {
            $candidates = Ms::where('registrationNumber', $reg_number)
                                ->first();
            if(!$candidates)
            {
                $message = 'Invalid registration number';
                return View::make('error')->with('message', $message);
            }                               
            $ugDetails = MsUg::where('registrationNumber', $reg_number)
                                    ->first();
            $proDetails = MsPro::where('registrationNumber', $reg_number)
                                    ->first();
            $scores = MsScores::where('registrationNumber', $reg_number)
                                    ->first();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'scores' => $scores,
                            'pro' => $proDetails
                            );
            $pdf = PDF::loadView('print', $data);
            return response($pdf->output())
                            ->header('Content-Type', 'application/pdf');
        }
	}
	
}
