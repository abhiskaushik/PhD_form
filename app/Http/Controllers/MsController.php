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
use App\MsOther;

class MsController extends Controller
{
    public function validated(Request $request)
    {

    	$rules = array(   
            'chalanNo' => 'required',                     
	        // 'date' => 'required',     
	        'appl_categ' => 'required',
	        'department1' => 'required',
            // 'department2' => 'required',
            // 'department3' => 'required',
	        'area_of_research' => 'required',
	        'name' => 'required',
	        'father_name' => 'required',
	        'dob' => 'required',
	        'category' => 'required|in:OBC,OC,SC,ST',
	        'sex' => 'required|in:Male,Female',
            'marital_status' => 'required',
	        'ph' => 'required|in:Yes,No',
	        'nationality' => 'required',
	        'addr_for_commn' => 'required|max:200',
            'permanent_addr' =>'required|max:200',
            'email' => 'required|email',
            'mobile' => 'required',
            // 'landline' => 'required',
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
	        'gpa7' => 'required'
            // 'g-recaptcha-response' => 'required|captcha'
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

        	$checkcandidate = Ms::where('name' , $request->input('name'))
                                ->where('dob', $request->input('dob'))
                                ->where('addrforcomm' , $request->input('addr_for_commn'))
                                ->first();
            $bool1 = false;
            if($checkcandidate != NULL)
            {
                $bool1 = $checkcandidate->flag;
            }
            $bool2 = Ms::where('registrationNumber' , $request->get('regNo'))
                                ->first();

            if($bool1 == false && $bool2 == NULL){
            $details = array(
                // 'date' => $request->get('date'),
                // 'date_of_sub' => $request->get('date_of_sub'),
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

            if($request->input('ann') == 'on')
            {
                $details['score'] = $request->input('score');
                $details['rank'] = $request->input('rank');
                $details['validity'] = $request->input('validity');
                $details['discipline'] = $request->input('discipline');
                $details['exam'] = $request->input('exam');
            }
            else
            {
                $details['score'] = 'RA';
                $details['rank'] = 'RA';
                $details['validity'] = 'RA';
                $details['discipline'] = 'RA';
                $details['exam'] = 'RA';
            }

            $file = $request->file('image_path');   
            $extension = $request->file('image_path')->getClientOriginalExtension();
            if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg')
            {
                list($width, $height) = getimagesize($file);
                if($width < 413 && $height < 531)
                {

                }
                else
                {
                    $message = 'Dimensions for the uploaded image are more than 413X531';
                    return View::make('error')->with('message', $message);  
                }
            }
            else
            {
                $message = 'Invalid file format for the uploaded image or Dimensions are more than 413X531';
                return View::make('error')->with('message', $message);
            }

            $sign = $request->file('sign');  
            $signExt = $request->file('sign')->getClientOriginalExtension();
            if($signExt == 'jpg' || $signExt == 'png' || $signExt == 'jpeg')
            {
                list($width, $height) = getimagesize($file);
                if($width < 413 && $height < 531)
                {

                }
                else
                {
                    $message = 'Size of the uploaded signature is more than 4 kb';
                    return View::make('error')->with('message', $message);
                }
            }
            else
            {
                $message = 'Invalid file format for the uploaded Signature';
                return View::make('error')->with('message', $message);
            }

            $cert = null;

            if($request->input('appl_categ') == 'Part Time')
            {
                $cert = $request->file('form1');
                if(!$cert)
                {
                    
                }
                else
                {
                    $extension3 = $request->file('form1')->getClientOriginalExtension();
                    if($extension3 != 'pdf')
                    {
                        $message = 'Invalid file format for the uploaded file';
                        return View::make('error')->with('message', $message);
                    }
                }
            }

            $candidate = new Ms();

            $candidate->chalanNo = $request->input('chalanNo');
            $candidate->registrationNumber = $request->input('regNo');
            $candidate->applicationCategory = $request->get('appl_categ');
            $candidate->dept1 = self::department($request->input('department1'));
            $candidate->dept2 = self::department($request->input('department2'));
            $candidate->dept3 = self::department($request->input('department3'));
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
            $reg_number = $request->input('regNo');

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

            $others = new MsOther();

            $others->applNo = $applNo;
            $others->score = $details['score'];
            $others->rank = $details['rank'];
            $others->validity = $details['validity'];
            $others->discipline = $details['discipline'];
            $others->exam = $details['exam'];

            $others->save();

            $details['reg_number'] = $reg_number;
            $details['phdorms'] = 'ms';

            $image_path = '';
            if($file)
            {
                $file = $file->move(public_path().'/uploads/MS/'.$reg_number , 'photo.' . $extension);
                $image_path = $image_path . $extension;
            }
            $image_path .= ",";
            if($cert)
            {
                $cert = $cert->move(public_path().'/uploads/MS/'.$reg_number, 'cert.' . $extension3);
            }
            if($sign)
            {
                $sign = $sign->move(public_path().'/uploads/MS/'.$reg_number, 'sign.' . $signExt);
                $image_path = $image_path . $signExt;
                Ms::where('registrationNumber', $request->input('regNo'))
                                ->update(['imagePath' => $image_path]);
            }
            return View::make('success')->with('details', $details);
            }
            else{
            	$message = "User already exists ";
            	return View::make('error')->with('message' , $message);
            }
        }
    }

    public function department($t)
    {
        if($t == 'Computer Science and Engineering')
        {
            return 'CS';
        }
        if($t == 'Chemical Engineering')
        {
            return 'CL';
        }
        if($t == 'Civil Engineering')
        {
            return 'CV';
        }
        if($t == 'CECASE')
        {
            return 'CC';
        }
        if($t == 'Department of Energy Engineering')
        {
            return 'EN';
        }
        if($t == 'Electrical and Electronics Engineering')
        {
            return 'EE';
        }
        if($t == 'Electronics and Communication Engineering')
        {
            return 'EC';
        }
        if($t == 'Mechanical Engineering')
        {
            return 'ME';
        }
        if($t == 'Production Engineering')
        {
            return 'PR';
        }
        if($t == 'Metalurgy and Material Sciences')
        {
            return 'MME';
        }
        if($t == 'Instrumentation and Control Engineering')
        {
            return 'IC';
        }
        if($t == 'Physics')
        {
            return 'PH';
        }
        if($t == 'Humanities & Social Science'){
            return 'HM';
        }
    }
}
