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

class SaveController extends Controller
{
    public function savephd(Request $request)
    {
    	$candidate = new SavePhd();

		$candidate->applicationCategory = $request->input('appl_categ');
        $candidate->dateOfReg = $request->input('date');
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
        $candidate->nationality = $request->input('nationality');
        $candidate->addrforcomm = $request->input('addr_for_commn');
        $candidate->permanentaddr = $request->input('permanent_addr');
        $candidate->email = $request->input('email');
        $candidate->mobile = $request->input('mobile');
        $candidate->lanline = $request->input('landline');
        $candidate->ugdegreeName = $request->input('ug_deg');
        $candidate->ugbranch = $request->input('ug_branch');
        // $candidate->gpa = $details['ug_gpa'];
        // replace this field by gpa
        $candidate->ugclass = $request->input('ug_class');
        $candidate->uginstitutionName = $request->input('ug_name_of_inst');
        $candidate->uguniversityName= $request->input('ug_name_of_uni');
        $candidate->ugyop = $request->input('ug_yop');
        $candidate->pgdegreeName = $request->input('pg_deg');
        $candidate->pgbranch = $request->input('pg_branch');
        // $candidate->gpa = $details['pg_gpa'];
        $candidate->pgclass = $request->input('pg_class');
        $candidate->pginstitutionName = $request->input('pg_name_of_inst');
        $candidate->pguniversityName= $request->input('pg_name_of_uni');
        $candidate->pgyop = $request->input('pg_yop');
        // $candidate->score = $details['score'];
        // $candidate->rank = $details['rank'];
        // $candidate->validity = $details['validity'];
        // $candidate->discipline = $details['discipline'];
        // $candidate->exam = $details['exam'];
        $candidate->pgproject = $request->input('title_of_project');
        $candidate->publications1 = $request->input('details_of_pub1');
        $candidate->publications2 = $request->input('details_of_pub2');
        $candidate->publications3 = $request->input('details_of_pub3');
        $candidate->awards1 = $request->input('awards1');
        $candidate->awards2 = $request->input('awards2');
        $candidate->awards3 = $request->input('awards3');
        $candidate->subdate = $request->input('date');
        $candidate->proexp1 = $request->input('employer_details_1');
        $candidate->proexp2 = $request->input('employer_details_2');
        $candidate->proexp3 = $request->input('employer_details_3');
        $candidate->position1 = $request->input('emp_pos_1');
        $candidate->position2 = $request->input('emp_pos_2');
        $candidate->position3 = $request->input('emp_pos_3');
        $candidate->from1 = $request->input('emp_from_1');
        $candidate->from2 = $request->input('emp_from_2');
        $candidate->from3 = $request->input('emp_from_3');
        $candidate->to1 = $request->input('emp_to_1');
        $candidate->to2 = $request->input('emp_to_2');
        $candidate->to3 = $request->input('emp_to_3');

        $candidate->save();

        return json_encode(0);
    }

    public function savems(Request $request)
    {
    	$candidate = new SaveMs();

    	$candidate->applicationCategory = $request->get('appl_categ');
        $candidate->dateOfReg = $request->get('date');
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
        $candidate->nationality = $request->get('nationality');
        $candidate->addrforcomm = $request->get('addr_for_commn');
        $candidate->permanentaddr = $request->get('permanent_addr');
        $candidate->email = $request->get('email');
        $candidate->mobile = $request->get('mobile');
        $candidate->lanline = $request->get('landline');
        $candidate->ugdegreeName = $request->get('ug_deg');
        $candidate->ugbranch = $request->get('ug_branch');
        // $candidate->gpa = $details['ug_gpa'];
        // replace this field by gpa
        $candidate->ugclass = $request->get('ug_class');
        $candidate->uginstitutionName = $request->get('ug_name_of_inst');
        $candidate->uguniversityName= $request->get('ug_name_of_uni');
        $candidate->ugyop = $request->get('ug_yop');
        $candidate->proexp1 = $request->get('employer_details_1');
        $candidate->proexp2 = $request->get('employer_details_2');
        $candidate->proexp3 = $request->get('employer_details_3');
        $candidate->position1 = $request->get('emp_pos_1');
        $candidate->position2 = $request->get('emp_pos_2');
        $candidate->position3 = $request->get('emp_pos_3');
        $candidate->from1 = $request->get('emp_from_1');
        $candidate->from2 = $request->get('emp_from_2');
        $candidate->from3 = $request->get('emp_from_3');
        $candidate->to1 = $request->get('emp_to_1');
        $candidate->to2 = $request->get('emp_to_2');
        $candidate->to3 = $request->get('emp_to_3');
        
        $candidate->gpamax1 = $request->get('max1');
        $candidate->gpamax2 = $request->get('max2');
        $candidate->gpamax3 = $request->get('max3');
        $candidate->gpamax4 = $request->get('max4');
        $candidate->gpamax5 = $request->get('max5');
        $candidate->gpamax6 = $request->get('max6');
        $candidate->gpamax7 = $request->get('max7');
        // $candidate->gpamax8 = $details['max8'];
        $candidate->gpa1 = $request->get('gpa1');
        $candidate->gpa2 = $request->get('gpa2');
        $candidate->gpa3 = $request->get('gpa3');
        $candidate->gpa4 = $request->get('gpa4');
        $candidate->gpa5 = $request->get('gpa5');
        $candidate->gpa6 = $request->get('gpa6');
        $candidate->gpa7 = $request->get('gpa7');
        // $candidate->gpa8 = $details['gpa8'];
        return json_encode(0);
    }

    public function fetch(Request $request)
    {
    	$category = $request->input('category');
    	$applNo = $request->input('applNo');

    	$rules = array(
    		'category' => 'required',
    		'applNo' => 'required'
    	);

    	$validator = Validator::make($request->all(), $rules);

    	if(count($validator->errors()) > 0)
    	{
    		$message = 'Please fill all the details';
    		return view('error')->with('message', $message);
    	}
    	else
    	{
            Session::put('applNo', $applNo);
    		if($category == 'phd')
    		{
    			$details = SavePhd::where('applNo', $applNo)
    									->first();
    			return view('saved.phd')->with('details', $details);
    		}
    		else
    		{
    			$details = SaveMs::where('applNo', $applNo)
    									->first();
    			return view('saved.ms')->with('details', $details);
    		}
    	}
    }

    public function save2phd(Request $request)
    {
        $details = array(
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
            // 'gpa' => $details['ug_gpa'],
            // replace this field by gpa
            'ugclass' => $request->input('ug_class'),
            'uginstitutionName' => $request->input('ug_name_of_inst'),
            'uguniversityName'=> $request->input('ug_name_of_uni'),
            'ugyop' => $request->input('ug_yop'),
            'pgdegreeName' => $request->input('pg_deg'),
            'pgbranch' => $request->input('pg_branch'),
            // 'gpa' => $details['pg_gpa'],
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

        Log::info($request->input('name').$request->input('father_name'));
        SavePhd::where('applNo', Session::get('applNo'))
                    ->update($details);

        return json_encode(0);
    }

    public function save2ms(Request $request)
    {
         $details = array(
            'applicationCategory' => $request->get('appl_categ'),
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
            // 'gpa' => $details['ug_gpa'],
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
        SaveMs::where('applNo', Session::get('applNo'))
                    ->update($details);

        return json_encode(0);
    }
}
