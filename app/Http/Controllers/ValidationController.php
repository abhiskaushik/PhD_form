<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator; 
use View;

class ValidationController extends Controller
{
    public function validated()
    {
    	$reg_number = Input::get('reg_number');
    	$date = Input::get('date');
    	$dd_no = Input::get('dd_no');
    	$date_of_submission = Input::get('date_of_sub');
    	$amount = Input::get('amount');
    	$drawn_at = Input::get('drawn_at');
    	$appl_categ = Input::get('appl_categ');//dont know how to add name attribute here
    	$department = Input::get('department');
    	$area_of_research = Input::get('area_of_research');
    	$name = Input::get('name');
    	$father_name = Input::get('father_name');
    	$dob = Input::get('dob');
    	$category = Input::get('category');//dont know how to add name attribute here
    	$sex_marital_status = Input::get('sex_marital_status');//dont know how to add name attribute here
    	$ph = Input::get('ph');//dont know how to add name attribute here
    	$nationality = Input::get('nationality');
    	$addr_for_commn = Input::get('addr_for_commn');
    	$permanent_addr = Input::get('permanent_addr');
    	$ug_deg = Input::get('ug_deg');
    	$ug_branch = Input::get('ug_branch');
    	$ug_percentage = Input::get('ug_percentage');
    	$ug_gpa = Input::get('ug_gpa');
    	$ug_class = Input::get('ug_class');
    	$ug_name_of_inst = Input::get('ug_name_of_inst');
    	$ug_name_of_uni = Input::get('ug_name_of_uni');
    	$ug_yop = Input::get('ug_yop');

    	$pg_deg = Input::get('pg_deg');
    	$pg_branch = Input::get('pg_branch');
    	$pg_percentage = Input::get('pg_percentage');

    	$pg_gpa = Input::get('pg_gpa');
    	$pg_class = Input::get('pg_class');
    	$pg_name_of_inst = Input::get('pg_name_of_inst');
    	$pg_name_of_uni = Input::get('pg_name_of_uni');
    	$pg_yop = Input::get('pg_yop');
    	$score = Input::get('score');
    	$rank = Input::get('rank');
    	$title_of_project = Input::get('title_of_project');
    	$details_of_pub = Input::get('details_of_pub');
    	$awards = Input::get('awards');
    	$employer_details_1 = Input::get('employer_details_1');
    	$employer_details_2 = Input::get('employer_details_2');
    	$employer_details_3 = Input::get('employer_details_3');

    	$rules = array(
	        // 'reg_number' => 'required',                        
	        // 'date' => 'required',     
	        // 'dd_no' => 'required',
	        // 'date_of_sub' => 'required',
	        // 'amount' => 'required',
	        // 'drawn_at' => 'required',
	        // 'appl_categ' => 'required',
	        // 'department' => 'required',
	        // 'area_of_research' => 'required',
	        // 'name' => 'required',
	        // 'father_name' => 'required',
	        // 'dob' => 'required',
	        // 'category' => 'required',
	        // 'sex_marital_status' => 'required',
	        // 'ph' => 'required',
	        // 'nationality' => 'required',
	        // 'addr_for_commn' => 'required',
	        // 'ug_deg' => 'required',
	        // 'ug_branch' => 'required',
	        // 'ug_gpa' => 'required',
	        // 'ug_class' => 'required',
	        // 'ug_name_of_inst' => 'required',
	        // 'ug_name_of_uni' => 'required',
	        // 'ug_yop' => 'required',
         //    'pg_deg' => 'required',
         //    'pg_branch' => 'required',
         //    'pg_gpa' => 'required',
         //    'pg_class' => 'required',
         //    'pg_name_of_inst' => 'required',
         //    'pg_name_of_uni' => 'required',
         //    'pg_yop' => 'required',
         //    'score' => 'required',
         //    'rank' => 'required',
         //    'title_of_project' => 'required',
         //    'details_of_pub' => 'required',
         //    'awards' => 'required',
         //    'employer_details_1' => 'required'               
    	);
        
    	$validator = Validator::make(Input::all(), $rules);


    	if($validator->fails())
    	{
    		$message = 'Please fill in all the details';
			return View::make('error')->with('message', $message);
    	}
        else
        {
            $details = array(
                'reg_number' => Input::get('reg_number'),
                'date' => Input::get('date'),
                'dd_no' => Input::get('dd_no'),
                'date_of_sub' => Input::get('date_of_sub'),
                'amount' => Input::get('amount'),
                'drawn_at' => Input::get('drawn_at'),
                'appl_categ' => Input::get('appl_categ'),//dont know how to add $name attribute here
                'department' => Input::get('department'),
                'area_of_research' => Input::get('area_of_research'),
                'name' => Input::get('name'),
                'father_name' => Input::get('father_name'),
                'dob' => Input::get('dob'),
                'category' => Input::get('category'),//dont know how to add $name attribute here
                'sex_marital_status' => Input::get('sex_marital_status'),//dont know how to add $name attribute here
                'ph' => Input::get('ph'),//dont know how to add $name attribute here
                'nationality' => Input::get('nationality'),
                'addr_for_commn' => Input::get('addr_for_commn'),
                'permanent_addr' => Input::get('permanent_addr'),
                'ug_deg' => Input::get('ug_deg'),
                'ug_branch' => Input::get('ug_branch'),
                'ug_percentage' => Input::get('ug_percentage'),
                'ug_gpa' => Input::get('ug_gpa'),
                'ug_class' => Input::get('ug_class'),
                'ug_name_of_inst' => Input::get('ug_name_of_inst'),
                'ug_name_of_uni' => Input::get('ug_name_of_uni'),
                'ug_yop' => Input::get('ug_yop'),
                'pg_deg' => Input::get('pg_deg'),
                'pg_branch' => Input::get('pg_branch'),
                'pg_percentage' => Input::get('pg_percentage'),
                'pg_gpa' => Input::get('pg_gpa'),
                'pg_class' => Input::get('pg_class'),
                'pg_name_of_inst' => Input::get('pg_name_of_inst'),
                'pg_name_of_uni' => Input::get('pg_name_of_uni'),
                'pg_yop' => Input::get('pg_yop'),
                'score' => Input::get('score'),
                'rank' => Input::get('rank'),
                'title_of_project' => Input::get('title_of_project'),
                'details_of_pub' => Input::get('details_of_pub'),
                'awards' => Input::get('awards'),
                'employer_details_1' => Input::get('employer_details_1'),
                'employer_details_2' =>Input::get('employer_details_2'),
                'employer_details_3' => Input::get('employer_details_3')
            );
            $data = json_decode(file_get_contents('details.json'));
            // dd($data);
            array_push($data, $details);
            file_put_contents('details.json', json_encode($data));
            return View::make('success')->with('details', $details);
        }
    }
}
