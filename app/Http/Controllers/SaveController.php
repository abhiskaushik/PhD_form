<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SavePhd;
use App\SaveMs;
use Validator;
use Session;
use Log;
use Illuminate\Support\Facades\Mail;

class SaveController extends Controller
{
    public function savephd(Request $request)
    {

        $bool = SavePhd::where('name' , $request->input('name'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->where('dob', $request->input('dob'))
                                ->first();

        if($bool == NULL){

    	$candidate = new SavePhd();

        $candidate->dept1 = $request->input('department1');
        $candidate->dept2 = $request->input('department2');
        $candidate->dept3 = $request->input('department3');
        $candidate->areaOfResearch = $request->input('area_of_research');
        $candidate->name = $request->input('name');
        $candidate->fatherName = $request->input('father_name');
        $candidate->dob = $request->input('dob');
        $candidate->category = $request->input('category');
        $candidate->sex = $request->input('sex');
        $candidate->maritalStatus = $request->input('marital_status');
        $candidate->ph = $request->input('ph');
        $candidate->age = $request->input('age');
        $candidate->nationality = $request->input('nationality');
        $candidate->addrforcomm = $request->input('addr_for_commn');
        $candidate->permanentaddr = $request->input('permanent_addr');
        $candidate->email = $request->input('email');
        $candidate->mobile = $request->input('mobile');
        $candidate->lanline = $request->get('landline');

        $candidate->save();

        $applNo = $candidate->applNo;
        $reg_number = 'PHD/';
        for($i = 1; $i <= 3; $i++)
        {
            if($request->input('department'.$i))
            {
                $reg_number = $reg_number.$request->input('department'.$i).'/';
            }
        }
        $reg_number = $reg_number.$applNo;
        SavePhd::where('applNo', $applNo)
                    ->update(['registrationNumber' => $reg_number]);

        $email = $request->get('email');
        Mail::send('emails.regnophd', ['applNo'=> $reg_number], function ($m) use($email) {
            $m->from('phdsection@nitt.edu', 'NITT Admissions');
            $m->to($email, 'Applicant' )->subject('Greetings from NITT!');
        });

        return json_encode($reg_number);

        }
        else
        {
            return json_encode(0);
        }
    }

    public function savems(Request $request)
    {

        $bool = SavePhd::where('name' , $request->input('name'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->where('dob', $request->input('dob'))
                                ->first();

        if($bool == NULL){

    	$candidate = new SaveMs();

        $candidate->dept1 = $request->get('department1');
        $candidate->dept2 = $request->get('department2');
        $candidate->dept3 = $request->get('department3');
        $candidate->areaOfResearch = $request->get('area_of_research');
        $candidate->name = $request->get('name');
        $candidate->fatherName = $request->get('father_name');
        $candidate->dob = $request->get('dob');
        $candidate->category = $request->get('category');
        $candidate->sex = $request->get('sex');
        $candidate->maritalStatus = $request->get('marital_status');
        $candidate->ph = $request->get('ph');
        $candidate->age = $request->input('age');
        $candidate->nationality = $request->get('nationality');
        $candidate->addrforcomm = $request->get('addr_for_commn');
        $candidate->permanentaddr = $request->get('permanent_addr');
        $candidate->email = $request->get('email');
        $candidate->mobile = $request->get('mobile');
        $candidate->lanline = $request->get('landline');

        $candidate->save();

        $applNo = $candidate->applNo;
        $reg_number = 'MS/';
        for($i = 1; $i <= 3; $i++)
        {
            if($request->input('department'.$i))
            {
                $reg_number = $reg_number.$request->input('department'.$i).'/';
            }
        }
        $reg_number = $reg_number.$applNo;
        SaveMs::where('applNo', $applNo)
                    ->update(['registrationNumber' => $reg_number]);

        $email = $request->input('email');
        Mail::send('emails.regnoms', ['applNo'=> $reg_number], function ($m) use($email) {
            $m->from('phdsection@nitt.edu', 'NITT Admissions');
            $m->to($email, 'Applicant' )->subject('Greetings from NITT!');
        });

        return json_encode($reg_number);
    }
    else{
        return json_encode(0);
    }
    }

    public function fetch($category, $applNo, $dob)
    {
        Session::put('applNo', $applNo);
        
        
		if($category == 'PHD')
		{
			$details = SavePhd::where('applNo', $applNo)
                                    ->where('dob', $dob)
									->first();
            
            if($details != NULL)
            {
                   
                return view('saved.phd')->with('details', $details);
            }
            else
            {
                $message = 'Invalid details';
                return view('error')->with('message', $message);
            }
		}
		else
		{
			$details = SaveMs::where('applNo', $applNo)
                                    ->where('dob', $dob)
                                    ->first();
            if($details != NULL)
            {
                
                return view('saved.ms')->with('details', $details);
            }
            else
            {
                $message = 'Invalid details';
                return view('error')->with('message', $message);
            }
		}
    }

    public function save2phd(Request $request)
    {
        $details = array(
            'chalanNo' => $request->input('chalanNo'),
            'applicationCategory' => $request->input('appl_categ'),
            'dateOfReg' => $request->input('date'),
            'dept1' => $request->input('department1'),
            'dept2' => $request->input('department2'),
            'dept3' => $request->input('department3'),
            'areaOfResearch' => $request->input('area_of_research'),
            'name' => $request->input('name'),
            'fatherName' => $request->input('father_name'),
            'dob' => $request->input('dob'),
            'category' => $request->input('category'),
            'sex' => $request->input('sex'),
            'maritalStatus' => $request->input('marital_status'),
            'ph' => $request->input('ph'),
            'nationality' => $request->input('nationality'),
            'addrforcomm' => $request->input('addr_for_commn'),
            'permanentaddr' => $request->input('permanent_addr'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'lanline' => $request->input('landline'),
            'ugdegreeName' => $request->input('ug_deg'),
            'ugbranch' => $request->input('ug_branch'),
            'uggpa' => $request->input('ug_gpa'),
            // replace this field by gpa
            'ugclass' => $request->input('ug_class'),
            'uginstitutionName' => $request->input('ug_name_of_inst'),
            'uguniversityName'=> $request->input('ug_name_of_uni'),
            'ugyop' => $request->input('ug_yop'),
            'pgdegreeName' => $request->input('pg_deg'),
            'pgbranch' => $request->input('pg_branch'),
            'pggpa' => $request->input('pg_gpa'),
            'pgclass' => $request->input('pg_class'),
            'pginstitutionName' => $request->input('pg_name_of_inst'),
            'pguniversityName'=> $request->input('pg_name_of_uni'),
            'pgyop' => $request->input('pg_yop'),
            // 'score' => $details['score'],
            // 'rank' => $details['rank'],
            // 'validity' => $details['validity'],
            // 'discipline' => $details['discipline'],
            // 'exam' => $details['exam'],
            'pgproject' => $request->input('title_of_project'),
            'publications1' => $request->input('details_of_pub1'),
            'publications2' => $request->input('details_of_pub2'),
            'publications3' => $request->input('details_of_pub3'),
            'awards1' => $request->input('awards1'),
            'awards2' => $request->input('awards2'),
            'awards3' => $request->input('awards3'),
            'subdate' => $request->input('date'),
            'proexp1' => $request->input('employer_details_1'),
            'proexp2' => $request->input('employer_details_2'),
            'proexp3' => $request->input('employer_details_3'),
            'position1' => $request->input('emp_pos_1'),
            'position2' => $request->input('emp_pos_2'),
            'position3' => $request->input('emp_pos_3'),
            'from1' => $request->input('emp_from_1'),
            'from2' => $request->input('emp_from_2'),
            'from3' => $request->input('emp_from_3'),
            'to1' => $request->input('emp_to_1'),
            'to2' => $request->input('emp_to_2'),
            'to3' => $request->input('emp_to_3')
        );

        Log::info($request);
        SavePhd::where('applNo', Session::get('applNo'))
                    ->update($details);

        return json_encode(0);
    }

    public function save2ms(Request $request)
    {
         $details = array(
            'applicationCategory' => $request->get('appl_categ'),
            'chalanNo' => $request->input('chalanNo'),
            'dateOfReg' => $request->get('date'),
            'dept1' => $request->get('department1'),
            'dept2' => $request->get('department2'),
            'dept3' => $request->get('department3'),
            'areaOfResearch' => $request->get('area_of_research'),
            'name' => $request->get('name'),
            'fatherName' => $request->get('father_name'),
            'dob' => $request->get('dob'),
            'category' => $request->get('category'),
            'sex' => $request->get('sex'),
            'maritalStatus' => $request->get('marital_status'),
            'ph' => $request->get('ph'),
            'nationality' => $request->get('nationality'),
            'addrforcomm' => $request->get('addr_for_commn'),
            'permanentaddr' => $request->get('permanent_addr'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'lanline' => $request->get('landline'),
            'ugdegreeName' => $request->get('ug_deg'),
            'ugbranch' => $request->get('ug_branch'),
            'uggpa' => $request->get('ug_gpa'),
            // replace this field by gpa
            'ugclass' => $request->get('ug_class'),
            'uginstitutionName' => $request->get('ug_name_of_inst'),
            'uguniversityName'=> $request->get('ug_name_of_uni'),
            'ugyop' => $request->get('ug_yop'),
            'proexp1' => $request->get('employer_details_1'),
            'proexp2' => $request->get('employer_details_2'),
            'proexp3' => $request->get('employer_details_3'),
            'position1' => $request->get('emp_pos_1'),
            'position2' => $request->get('emp_pos_2'),
            'position3' => $request->get('emp_pos_3'),
            'from1' => $request->get('emp_from_1'),
            'from2' => $request->get('emp_from_2'),
            'from3' => $request->get('emp_from_3'),
            'to1' => $request->get('emp_to_1'),
            'to2' => $request->get('emp_to_2'),
            'to3' => $request->get('emp_to_3'),
            
            'gpamax1' => $request->get('max1'),
            'gpamax2' => $request->get('max2'),
            'gpamax3' => $request->get('max3'),
            'gpamax4' => $request->get('max4'),
            'gpamax5' => $request->get('max5'),
            'gpamax6' => $request->get('max6'),
            'gpamax7' => $request->get('max7'),
            // 'gpamax8' => $details['max8'],
            'gpa1' => $request->get('gpa1'),
            'gpa2' => $request->get('gpa2'),
            'gpa3' => $request->get('gpa3'),
            'gpa4' => $request->get('gpa4'),
            'gpa5' => $request->get('gpa5'),
            'gpa6' => $request->get('gpa6'),
            'gpa7' => $request->get('gpa7')
        );

        Log::info($request);
        SaveMs::where('applNo', Session::get('applNo'))
                    ->update($details);

        return json_encode(0);
    }
}
