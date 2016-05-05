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
use File;

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
                ->where('password', sha1($password)) 
                ->first();

            if(count($auth) > 0)
            {
                Session::put('userName', $username);
                Session::put('dept', $auth->dept);
                return redirect('admin/home');
            }
            else
            {
                $message = 'Username or Password is incorrect';
                return View::make('error')->with('message', $message);
            }
        }
    }

    public function change(Request $request)
    {
        $rules = array(
            'username' => 'required',
            'old_password' => 'required',
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
            $oldpassword = $request->input('old_password');
            $newpassword = $request->input('new_password');

            $auth = Admin::where('userName', $username)
                ->where('password', sha1($oldpassword)) 
                ->first();

            if(count($auth) > 0)
            {
                Admin::where('userName', $username)
                            ->where('password', sha1($oldpassword))
                            ->update(['password' => sha1($newpassword)]);
                Session::put('userName', $username);
                Session::put('dept', $auth->dept);
                return view('admin.home');
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
        if(Session::get('dept') == 'all')
        {
            $rules1 = ['deleted' => false];
            $rules2 = ['deleted' => false];
            $rules3 = ['deleted' => false];
        }
        else
        {
            $rules1 = ['deleted' => false , 'dept1' => Session::get('dept')];
            $rules2 = ['deleted' => false , 'dept2' => Session::get('dept')];
            $rules3 = ['deleted' => false , 'dept3' => Session::get('dept')];
        }
        if($phdormsc == 'phd')
        {
            $candidates = Phd::where($rules1)
                                        ->orWhere($rules2)
                                        ->orWhere($rules3)
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
                            'pro' => $proDetails,
                            'dept' => Session::get('dept')
                            );
            return View::make('admin.'.$phdormsc)->with('data', $data);
        }
        else
        {
            $candidates = Ms::where($rules1)
                                        ->orWhere($rules2)
                                        ->orWhere($rules3)
                                        ->paginate(6);

            $candidates_id = $candidates->lists('applNo');
            $ugDetails = MsUg::whereIn('applNo', $candidates_id)->get(); 
            $scores = MsScores::whereIn('applNo', $candidates_id)->get();//changed this from MsScores to MsSemScore 
            $proDetails = MsPro::whereIn('applNo', $candidates_id)->get();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'scores' => $scores,
                            'pro' => $proDetails,
                            'dept' => Session::get('dept')
                            );
            return View::make('admin.'.$phdormsc)->with('data', $data);
        }

	}

	public function deleted(Request $request)
	{	
		$appl_number = $request->input('applNo');
        $phdormsc = Session::get('phdormsc');
        if($phdormsc == 'phd')
        {
            Phd::where('applNo', $appl_number)
                    ->update(['deleted' => true]);

            $user = Phd::select('name', 'email')
                                ->where('applNo', $appl_number)
                                ->first();                 
            Mail::send('emails.delete', ['user' => $user->name], function ($m) use($user) {
                $m->from('phdsection@nitt.edu', 'NITT Admissions');
                $m->to($user->email, 'Applicant' )->subject('Greetings from NITT!');
            });

            return json_encode($appl_number);
        }
        else
        {
            Ms::where('applNo', $appl_number)
                    ->update(['deleted' => true]);

            $user = Ms::select('name', 'email')
                                ->where('applNo', $appl_number)
                                ->first();
            Mail::send('emails.delete', ['user' => $user->name], function ($m) use($user) {
                $m->from('phdsection@nitt.edu', 'NITT Admissions');
                $m->to($user->email, 'Applicant')->subject('Greetings from NITT!');
            });

            return json_encode($appl_number);
        }
	}

    public function accepted(Request $request)
    {
        $appl_number = $request->input('applNo');
        $phdormsc = Session::get('phdormsc');
        if($phdormsc == 'phd')
        {
            Phd::where('applNo', $appl_number)
                    ->update(['accepted' => true]);

            $user = Phd::select('name', 'email')
                                ->where('applNo', $appl_number)
                                ->first();

            Mail::send('emails.accept', ['user' => $user->name], function ($m) use($user) {
                $m->from('phdsection@nitt.edu', 'NITT Admissions');
                $m->to($user->email, 'Applicant')->subject('Greetings from NITT!');
            });
            
            return json_encode($appl_number);
        }
        else
        {
            Ms::where('applNo', $appl_number)
                    ->update(['accepted' => true]);

            $user = Ms::select('name', 'email')
                                ->where('applNo', $appl_number)
                                ->first();

            Mail::send('emails.accept', ['user' => $user->name], function ($m) use($user) {
                $m->from('phdsection@nitt.edu', 'NITT Admissions');
                $m->to($user->email, 'Applicant')->subject('Greetings from NITT!');
            });

            return json_encode($appl_number);
        }
    }


	public function printer($phdormsc, $reg_number)
	{
	    if($phdormsc == 'PHD')
        {
            $candidates = Phd::where('applNo', $reg_number)
                                ->first();

            if(!$candidates)
            {
                $message = 'Invalid registration number';
                return View::make('error')->with('message', $message);
            }                               

            $ugDetails = PhdUg::where('applNo', $reg_number)
                                    ->first();
            $pgDetails = PhdPg::where('applNo', $reg_number)
                                    ->first();
            $otherDetails = PhdOther::where('applNo', $reg_number)
                                    ->first();
            $proDetails = PhdPro::where('applNo', $reg_number)
                                    ->first();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'pg' => $pgDetails,
                            'others' => $otherDetails,
                            'pro' => $proDetails,
                            'phdorms' => $phdormsc
                            );
            $data['candidates']->phdormsc = $phdormsc;
            $pdf = PDF::loadView('print', $data);
            return response($pdf->output())
                            ->header('Content-Type', 'application/pdf');
        }
        else
        {
            $candidates = Ms::where('applNo', $reg_number)
                                ->first();
            if(!$candidates)
            {
                $message = 'Invalid registration number';
                return View::make('error')->with('message', $message);
            }                               
            $ugDetails = MsUg::where('applNo', $reg_number)
                                    ->first();
            $proDetails = MsPro::where('applNo', $reg_number)
                                    ->first();
            $scores = MsScores::where('applNo', $reg_number)
                                    ->first();
            $data = array('candidates' => $candidates,
                            'ug' => $ugDetails,
                            'scores' => $scores,
                            'pro' => $proDetails,
                            'phdorms' => $phdormsc
                            );
            $pdf = PDF::loadView('print', $data);
            return response($pdf->output())
                            ->header('Content-Type', 'application/pdf');
        }
	}

    public function admitCard($phdormsc, $applNo)
    {
        $filename = $phdormsc.'/'.$applNo.'/'.$applNo;
        $path = public_path() . '/uploads/' . $filename;
        if(file_exists($path.'.jpg'))
        {
            $type = 'jpg';
        }
        else if(file_exists($path.'.jpeg'))
        {
            $type = 'jpeg';
        }
        else if(file_exists($path.'.png'))
        {
            $type = 'png';
        }

        if($phdormsc == 'PHD')
        {
            $candidate = Phd::select('name', 'registrationNumber')
                            ->where('applNo', $applNo)
                            ->first();
        }
        else
        {
            $candidate = Ms::select('name', 'registrationNumber')
                            ->where('applNo', $applNo)
                            ->first();
        }

        $data = array(
            'image' => $phdormsc.'/'.$applNo.'/'.$applNo.'.'.$type,
            'name' => $candidate->name,
            'dept' => Session::get('dept'),
            'regNo' => $candidate->registrationNumber
        );
        return view('admin.admit')->with($data);
    }
	
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}
