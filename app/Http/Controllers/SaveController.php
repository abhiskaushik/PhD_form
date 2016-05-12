<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SavePhd;
use App\SaveMs;
use App\Ms;
use App\Phd;
use Validator;
use Session;
use Log;
use Illuminate\Support\Facades\Mail;

class SaveController extends Controller
{
    public function savephd(Request $request)
    {

        $bool1 = SavePhd::where('name' , $request->input('name'))
                                ->where('email', $request->input('email'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->where('dob', $request->input('dob'))
                                ->first();

        $checkcandidate = Phd::where('name' , $request->input('name'))
                                ->where('email', $request->input('email'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->where('dob', $request->input('dob'))
                                ->first();

        $bool2 = false;
        if($checkcandidate != NULL)
        {
            $bool2 = $checkcandidate->flag;
        }

        if($bool1 == NULL && $bool2 == false){

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

        $rowNo = $candidate->applNo;
        $reg_number = 'PHD/';
        for($i = 1; $i <= 3; $i++)
        {
            if($request->input('department'.$i))
            {
                $reg_number = $reg_number.$request->input('department'.$i).'/';
            }
        }
        $applNo = self::randomno('PHD', $reg_number);
        $reg_number = $reg_number.$rowNo.'/'.$applNo;
        SavePhd::where('applNo', $rowNo)
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

        $bool = SaveMs::where('name' , $request->input('name'))
                                ->where('email', $request->input('email'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->where('dob', $request->input('dob'))
                                ->first();

        $checkcandidate = Ms::where('name' , $request->input('name'))
                                ->where('email', $request->input('email'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->where('dob', $request->input('dob'))
                                ->first();

        $bool2 = false;
        if($checkcandidate != NULL)
        {
            $bool2 = $checkcandidate->flag;
        }

        if($bool == NULL && $bool2 == false){

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

        $rowNo = $candidate->applNo;
        $reg_number = 'MS/';
        for($i = 1; $i <= 3; $i++)
        {
            if($request->input('department'.$i))
            {
                $reg_number = $reg_number.$request->input('department'.$i).'/';
            }
        }
        $applNo = self::randomno('PHD', $reg_number);
        $reg_number = $reg_number.$rowNo.'/'.$applNo;
        SaveMs::where('applNo', $rowNo)
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
        $regNo = '';
        $dept = explode('-', $applNo);

        for($i = 0; $i < sizeof($dept) - 1; $i++)
        {
            $regNo = $regNo.$dept[$i].'/';
        }
        $regNo = $regNo.$dept[sizeof($dept) - 1];
        Session::put('regNo', $regNo);
        if($category == 'PHD')
		{
			$details = SavePhd::where('registrationNumber', $regNo)
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
			$details = SaveMs::where('registrationNumber', $regNo)
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
            'score' => $request->input('score'),
            'rank' => $request->input('rank'),
            'validity' => $request->input('validity'),
            'discipline' => $request->input('discipline'),
            'exam' => $request->input('exam'),
            'pgproject' => $request->input('title_of_project'),
            'publications1' => $request->input('details_of_pub1'),
            'publications2' => $request->input('details_of_pub2'),
            'publications3' => $request->input('details_of_pub3'),
            'awards1' => $request->input('awards1'),
            'awards2' => $request->input('awards2'),
            'awards3' => $request->input('awards3'),
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

        SavePhd::where('registrationNumber', Session::get('regNo'))
                    ->update($details);

        return json_encode(0);
    }

    public function save2ms(Request $request)
    {
         $details = array(
            'applicationCategory' => $request->get('appl_categ'),
            'chalanNo' => $request->input('chalanNo'),
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
            'score' => $request->input('score'),
            'rank' => $request->input('rank'),
            'validity' => $request->input('validity'),
            'discipline' => $request->input('discipline'),
            'exam' => $request->input('exam'),
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
            'gpamax8' => $request->get('max8'),
            'gpa1' => $request->get('gpa1'),
            'gpa2' => $request->get('gpa2'),
            'gpa3' => $request->get('gpa3'),
            'gpa4' => $request->get('gpa4'),
            'gpa5' => $request->get('gpa5'),
            'gpa6' => $request->get('gpa6'),
            'gpa7' => $request->get('gpa7'),
            'gpa8' => $request->get('gpa8')
        );
         Log::info($request->input('score'));
        SaveMs::where('registrationNumber', Session::get('regNo'))
                    ->update($details);

        return json_encode(0);
    }

    public function randomno($phdormsc, $reg_number)
    {
        $number = mt_rand(1, 5000); 
        
        if (self::ifnoexists($number, $phdormsc, $reg_number)) {
            return self::randomno($phdormsc, $reg_number);
        }   

        return $number;
    }

    public function ifnoexists($number, $phdormsc, $reg_number)
    {
        if($phdormsc == 'PHD')
        {
            $candidate = SavePhd::where('registrationNumber', $reg_number.$number)->first();
            if($candidate == NULL)
            {
                return false;
            }
            return true;
        }
        else
        {
            $candidate = SaveMs::where('registrationNumber', $reg_number.$number)->first();
            if($candidate == NULL)
            {
                return false;
            }
            return true;
        }
    }
}
