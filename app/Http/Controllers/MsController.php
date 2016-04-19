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
use App\MsScores;
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
            'permanent_addr' =>'required|max:200',
            'email' => 'required|email|unique:ms',
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
	        // 'max8' => 'required',
	        'gpa1' => 'required',
	        'gpa2' => 'required',
	        'gpa3' => 'required',
	        'gpa4' => 'required',
	        'gpa5' => 'required',
	        'gpa6' => 'required',
	        'gpa7' => 'required',
	        // 'gpa8' => 'required',
            // 'title_of_project' => 'required',
            // 'details_of_pub' => 'required|max:30',
            // 'awards' => 'required',
            // 'employer_details_1' => 'required'               
    	);

        
    	$validator = Validator::make($request->all(), $rules);

        if(count($validator->errors()) > 0)
    	{
    		$message = 'Please fill in all the details';
			return View::make('error')->with('message', $validator->errors());
    	}
        else
        {

        	$bool = Ms::where('name' , $request->get('name'))
        						->where('addrforcomm' , $request->get('addr_for_commn'))
        						->first();

        	if($bool == NULL){
            $details = array(
                'date' => $request->get('date'),
                'date_of_sub' => $request->get('date_of_sub'),
                'appl_categ' => $request->get('appl_categ'),//dont know how to add $name attribute here
                'image_path' => $request->get('image_path'),
                'department1' => $request->get('department1'),
                'department2' => $request->get('department2'),
                'department3' => $request->get('department3'),
                'area_of_research' => $request->get('area_of_research'),
                'email' => $request->get('email'),
                'mobile' => $request->get('mobile'),
                'landline' => $request->get('landline'),
                'name' => $request->get('name'),
                'father_name' => $request->get('father_name'),
                'dob' => $request->get('dob'),
                'category' => $request->get('category'),//dont know how to add $name attribute here
                'sex' => $request->get('sex'),//dont know how to add $name attribute here
                'marital_status' => $request->get('marital_status'),
                'ph' => $request->get('ph'),//dont know how to add $name attribute here
                'nationality' => $request->get('nationality'),
                'addr_for_commn' => $request->get('addr_for_commn'),
                'permanent_addr' => $request->get('permanent_addr'),
                'ug_deg' => $request->get('ug_deg'),
                'ug_branch' => $request->get('ug_branch'),
                'ug_percentage' => $request->get('ug_percentage'),
                'ug_gpa' => $request->get('ug_gpa'),
                'ug_class' => $request->get('ug_class'),
                'ug_name_of_inst' => $request->get('ug_name_of_inst'),
                'ug_name_of_uni' => $request->get('ug_name_of_uni'),
                'ug_yop' => $request->get('ug_yop'),
                // 'score' => $request->get('score'),
                // 'rank' => $request->get('rank'),
                'employer_details_1' => $request->get('employer_details_1'),
                'employer_details_2' =>$request->get('employer_details_2'),
                'employer_details_3' => $request->get('employer_details_3'),
                'position1' => $request->get('emp_pos_1'),
                'position2' => $request->get('emp_pos_2'),
                'position3' => $request->get('emp_pos_3'),
                'from1' => $request->get('emp_from_1'),
                'from2' => $request->get('emp_from_2'),
                'from3' => $request->get('emp_from_3'),
                'to1' => $request->get('emp_to_1'),
                'to2' => $request->get('emp_to_2'),
                'to3' => $request->get('emp_to_3'),
                'max1' => $request->get('max1'),
                'max2' => $request->get('max2'),
                'max3' => $request->get('max3'),
                'max4' => $request->get('max4'),
                'max5' => $request->get('max5'),
                'max6' => $request->get('max6'),
                'max7' => $request->get('max7'),
                'gpa1' => $request->get('gpa1'),
                'gpa2' => $request->get('gpa2'),
                'gpa3' => $request->get('gpa3'),
                'gpa4' => $request->get('gpa4'),
                'gpa5' => $request->get('gpa5'),
                'gpa6' => $request->get('gpa6'),
                'gpa7' => $request->get('gpa7')
            );

            $file = $request->file('image_path');   
            $extension = $request->file('image_path')->getClientOriginalExtension();
            if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg')
            {
                
            }
            else
            {
                $message = 'Inavlid file format for the uploaded image';
                return View::make('error')->with('message', $message);
            }

            $cert = null;

            if($request->input('appl_categ') == 'Part Time')
            {
                $cert = $request->file('form1');
                if(!$cert)
                {
                    $message = 'Upload all the required forms';
                    return View::make('error')->with('message', $message);
                }
                else
                {
                    $extension3 = $request->file('form1')->getClientOriginalExtension();
                    if($extension3 != 'pdf')
                    {
                        $message = 'Invalid file format for the uploaded files';
                        return View::make('error')->with('message', $message);
                    }
                }
            }

            $candidate = new Ms();

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

            $candidate->save();

            $applNo = $candidate->applNo;
            $reg_number = 'MS/';
            for($i = 1; $i <= 3; $i++)
            {
                if($request->get('department'.$i))
                {
                    $reg_number = $reg_number.$request->get('department'.$i).'/';
                }
            }
            $reg_number = $reg_number.$applNo;
            Ms::where('applNo', $applNo)
                    ->update(['registrationNumber' => $reg_number]);

            if($request->get('ra1') == 'on')
            {
                $details['ug_gpa'] = 'RA';
            }
            if($request->get('ra3') == 'on')
            {
                $details['gpa8'] = 'RA';
                $details['max8'] = 'RA';
            }
            else
            {
            	$details['gpa8'] = $request->get('gpa8');
            	$details['max8'] = $request->get('max8');
            }

            $ugDetails = new MsUg();

            $ugDetails->applNo = $applNo;
            $ugDetails->degreeName = $request->get('ug_deg');
            $ugDetails->branch = $request->get('ug_branch');
            $ugDetails->gpa = $details['ug_gpa'];
            // replace this field by gpa
            $ugDetails->class = $request->get('ug_class');
            $ugDetails->institutionName = $request->get('ug_name_of_inst');
            $ugDetails->universityName= $request->get('ug_name_of_uni');
            $ugDetails->yop = $request->get('ug_yop');
            
            $ugDetails->save();

            $pro = new MsPro();

            $pro->applNo = $applNo;
			$pro->proexp1 = $request->get('employer_details_1');
            $pro->proexp2 = $request->get('employer_details_2');
            $pro->proexp3 = $request->get('employer_details_3');
            $pro->position1 = $request->get('emp_pos_1');
            $pro->position2 = $request->get('emp_pos_2');
            $pro->position3 = $request->get('emp_pos_3');
            $pro->from1 = $request->get('emp_from_1');
            $pro->from2 = $request->get('emp_from_2');
            $pro->from3 = $request->get('emp_from_3');
            $pro->to1 = $request->get('emp_to_1');
            $pro->to2 = $request->get('emp_to_2');
            $pro->to3 = $request->get('emp_to_3');

            $pro->save();

            $msScores = new MsScores();

            $msScores->applNo = $applNo;
            $msScores->gpamax1 = $request->get('max1');
            $msScores->gpamax2 = $request->get('max2');
            $msScores->gpamax3 = $request->get('max3');
            $msScores->gpamax4 = $request->get('max4');
            $msScores->gpamax5 = $request->get('max5');
            $msScores->gpamax6 = $request->get('max6');
            $msScores->gpamax7 = $request->get('max7');
            $msScores->gpamax8 = $details['max8'];
            $msScores->gpa1 = $request->get('gpa1');
            $msScores->gpa2 = $request->get('gpa2');
            $msScores->gpa3 = $request->get('gpa3');
            $msScores->gpa4 = $request->get('gpa4');
            $msScores->gpa5 = $request->get('gpa5');
            $msScores->gpa6 = $request->get('gpa6');
            $msScores->gpa7 = $request->get('gpa7');
            $msScores->gpa8 = $details['gpa8'];

            $msScores->save();

            $details['reg_number'] = $reg_number;
            $details['phdorms'] = 'ms';

            if($file)
            {
                $file = $file->move(public_path().'/uploads/MS/'.$applNo , $applNo.'.'.$extension);
            }
            if($cert)
            {
                $cert = $cert->move(public_path().'/uploads/MS/'.$applNo, $applNo.'cert'.'.'.$extension3);
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
