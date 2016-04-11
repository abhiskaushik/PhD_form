<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator; 
use View;
use File;
use Storage;
use App\Ms;
use App\MsUg;
use MsScores;
use App\MsPro;

class MsController extends Controller
{
    public function validated(Request $request)
    {

    	$rules = array(                        
	        'date' => 'required',     
	        'appl_categ' => 'required',
	        'department1' => 'required',
            'department2' => 'required',
            'department3' => 'required',
	        'area_of_research' => 'required',
	        'name' => 'required',
	        'father_name' => 'required',
	        'dob' => 'required',
	        'category' => 'required|in:OBC,OC,SC,ST',
	        'sex' => 'required|in:male,female',
            'marital_status' => 'required',
	        'ph' => 'required|in:yes,no',
	        'nationality' => 'required',
	        'addr_for_commn' => 'required|max:200',
            'permanent_addr' =>'required|max:200'
            'email' => 'required|email|unique:candidates',
            'mobile' => 'required',
            'landline' => 'required',
	        'ug_deg' => 'required',
	        'ug_branch' => 'required',
	        // 'ug_gpa' => 'required',
	        'ug_class' => 'required|in:Honours,Distinction,First,Second',
	        'ug_name_of_inst' => 'required',
	        'ug_name_of_uni' => 'required',
	        'ug_yop' => 'required',
	        'max1' => 'required',
	        'max2' => 'required',
	        'max3' => 'required',
	        'max4' => 'required',
	        'max5' => 'required',
	        'max6' => 'required',
	        'max7' => 'required',
	        'max8' => 'required',
	        'gpa1' => 'required',
	        'gpa2' => 'required',
	        'gpa3' => 'required',
	        'gpa4' => 'required',
	        'gpa5' => 'required',
	        'gpa6' => 'required',
	        'gpa7' => 'required',
	        'gpa8' => 'required',
            // 'title_of_project' => 'required',
            // 'details_of_pub' => 'required|max:30',
            // 'awards' => 'required',
            // 'employer_details_1' => 'required'               
    	);

        
    	$validator = Validator::make(Input::all(), $rules);

        if(!($validator->fails()))
    	{
    		$message = 'Please fill in all the details';
			return View::make('error')->with('message', $validator->errors());
    	}
        else
        {

        	$bool = Phd::where('name' , Input::get('name'))
        						->where('addrforcomm' , Input::get('addr_for_commn'))
        						->first();

        	if($bool == NULL){
            $details = array(
                'date' => Input::get('date'),
                'date_of_sub' => Input::get('date_of_sub'),
                'appl_categ' => Input::get('appl_categ'),//dont know how to add $name attribute here
                'image_path' => Input::get('image_path'),
                'department1' => Input::get('department1'),
                'department2' => Input::get('department2'),
                'department3' => Input::get('department3'),
                'area_of_research' => Input::get('area_of_research'),
                'email' => Input::get('email'),
                'mobile' => Input::get('mobile'),
                'landline' => Input::get('landline'),
                'name' => Input::get('name'),
                'father_name' => Input::get('father_name'),
                'dob' => Input::get('dob'),
                'category' => Input::get('category'),//dont know how to add $name attribute here
                'sex' => Input::get('sex'),//dont know how to add $name attribute here
                'marital_status' => Input::get('marital_status'),
                'ph' => Input::get('ph'),//dont know how to add $name attribute here
                'nationality' => Input::get('nationality'),
                'addr_for_commn' => Input::get('addr_for_commn'),
                'permanent_addr' => Input::get('permanent_addr'),
                'ug_deg' => Input::get('ug_deg'),
                'ug_branch' => Input::get('ug_branch'),
                'ug_percentage' => Input::get('ug_percentage'),
                'ug_gpa' => Input::get('ug_gpa'),
                // 'ug_class' => Input::get('ug_class'),
                'ug_name_of_inst' => Input::get('ug_name_of_inst'),
                'ug_name_of_uni' => Input::get('ug_name_of_uni'),
                'ug_yop' => Input::get('ug_yop'),
                // 'score' => Input::get('score'),
                // 'rank' => Input::get('rank'),
                'employer_details_1' => Input::get('employer_details_1'),
                'employer_details_2' =>Input::get('employer_details_2'),
                'employer_details_3' => Input::get('employer_details_3'),
                'postion1' => Input::get('emp_pos_1'),
                'postion2' => Input::get('emp_pos_2'),
                'postion3' => Input::get('emp_pos_3'),
                'from1' => Input::get('emp_from_1'),
                'from2' => Input::get('emp_from_2'),
                'from3' => Input::get('emp_from_3'),
                'to1' => Input::get('emp_to_1'),
                'to2' => Input::get('emp_to_2'),
                'to3' => Input::get('emp_to_3'),
                'max1' => Input::get('max1'),
                'max2' => Input::get('max2'),
                'max3' => Input::get('max3'),
                'max4' => Input::get('max4'),
                'max5' => Input::get('max5'),
                'max6' => Input::get('max6'),
                'max7' => Input::get('max7'),
                'gpa1' => Input::get('gpa1'),
                'gpa2' => Input::get('gpa2'),
                'gpa3' => Input::get('gpa3'),
                'gpa4' => Input::get('gpa4'),
                'gpa5' => Input::get('gpa5'),
                'gpa6' => Input::get('gpa6'),
                'gpa7' => Input::get('gpa7')
            );

            $candidate = new Phd();

            $candidate->applicationCategory = Input::get('appl_categ');
            $candidate->dateOfReg = Input::get('date');
            $candidate->dept1 = Input::get('department1');
            $candidate->dept2 = Input::get('department2');
            $candidate->dept3 = Input::get('department3');
            $candidate->areaOfResearch = Input::get('area_of_research');
            $candidate->name = Input::get('name');
            $candidate->fatherName = Input::get('father_name');
            $candidate->dob = Input::get('dob');
            $candidate->category = Input::get('category');
            $candidate->sex = Input::get('sex');
            $candidate->maritalStatus = Input::get('marital_status');
            $candidate->ph = Input::get('ph');
            $candidate->nationality = Input::get('nationality');
            $candidate->addrforcomm = Input::get('addr_for_commn');
            $candidate->permanentaddr = Input::get('permanent_addr');
            $candidate->email = Input::get('email');
            $candidate->mobile = Input::get('mobile');
            $candidate->landline = Input::get('landline');

            $candidate->save();

            $applNo = $candidate->applNo;
            $reg_number = 'MS/';
            for(int $i = 1; $i <= 3; $i++)
            {
                if(Input::get('department'.$i))
                {
                    $reg_number = $reg_number.Input::get('department'.$i).'/';
                }
            }
            $reg_number = $reg_number.$applNo;
            Phd::where('applNo', $applNo)
                    ->update(['registrationNumber' => $reg_number]);

            if(Input::get('ra1') == 'on')
            {
                $details['ug_gpa'] = 'RA';
            }
            if(Input::get('ra3') == 'on')
            {
                $details['gpa8'] = 'RA';
                $details['max8'] = 'RA';
            }
            else
            {
            	$details['gpa8'] = Input::get('gpa8');
            	$details['max8'] = Input::get('max8');
            }

            $ugDetails = new MsUg();

            $ugDetails->registrationNumber = $reg_number;
            $ugDetails->degreeName = Input::get('ug_deg');
            $ugDetails->branch = Input::get('ug_branch');
            $ugDetails->gpa = $details['ug_gpa'];
            // replace this field by gpa
            $ugDetails->class = Input::get('ug_class');
            $ugDetails->institutionName = Input::get('ug_name_of_inst');
            $ugDetails->universityName= Input::get('ug_name_of_uni');
            $ugDetails->yop = Input::get('ug_yop');
            
            $ugDetails->save();

            $pro = new MsPro();

			$pro->proexp1 = Input::get('employer_details_1');
            $pro->proexp2 = Input::get('employer_details_2');
            $pro->proexp3 = Input::get('employer_details_3');
            $pro->position1 = Input::get('emp_pos_1');
            $pro->position2 = Input::get('emp_pos_2');
            $pro->position3 = Input::get('emp_pos_3');
            $pro->from1 = Input::get('emp_from_1');
            $pro->from2 = Input::get('emp_from_2');
            $pro->from3 = Input::get('emp_from_3');
            $pro->to1 = Input::get('emp_to_1');
            $pro->to2 = Input::get('emp_to_2');
            $pro->to3 = Input::get('emp_to_3');

            $pro->save();

            $msScores = new MsScores();

            $msScores->gpamax1 = Input::get('max1');
            $msScores->gpamax2 = Input::get('max2');
            $msScores->gpamax3 = Input::get('max3');
            $msScores->gpamax4 = Input::get('max4');
            $msScores->gpamax5 = Input::get('max5');
            $msScores->gpamax6 = Input::get('max6');
            $msScores->gpamax7 = Input::get('max7');
            $msScores->gpamax8 = $details['max8'];
            $msScores->gpa1 = Input::get('gpa1');
            $msScores->gpa2 = Input::get('gpa2');
            $msScores->gpa3 = Input::get('gpa3');
            $msScores->gpa4 = Input::get('gpa4');
            $msScores->gpa5 = Input::get('gpa5');
            $msScores->gpa6 = Input::get('gpa6');
            $msScores->gpa7 = Input::get('gpa7');
            $msScores->gpa8 = $details['gpa8'];

            $msScores->save();

            $details['reg_number'] = $reg_number;
            $file = Input::file('image_path');
            $extension = Input::file('image_path')->getClientOriginalExtension();
            if($extension == 'jpg' || $extension=='png' || $extension == 'jpeg')
            {
                Storage::disk('local')->put($reg_number.'.'.$extension,  File::get($file));
            }
            return View::make('success')->with('details', $details);
            }
            else{
            	$message = "User already exists ";
            	return View::make('error')->with('message' , $message);
            }
        }
    }
}