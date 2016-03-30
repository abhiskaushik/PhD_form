<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

class ValidationController extends Controller
{
    public function validate()
    {
    	$reg_number = Input::get('reg_number');
    	echo $reg_number;
    	die();
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
    	$ug_percentage = Input::get('ug_percentage')
    	$ug_gpa = Input::get('ug_gpa');
    	$ug_class = Input::get('ug_class');
    	$ug_name_of_inst = Input::get('ug_name_of_inst');
    	$ug_name_of_uni = Input::get('ug_name_of_uni');
    	$ug_yop = Input::get('ug_yop');
    	$pg_deg = Input::get('ug_deg');
    	$pg_branch = Input::get('ug_branch');
    	$pg_percentage = Input::get('ug_percentage')
    	$pg_gpa = Input::get('ug_gpa');
    	$pg_class = Input::get('ug_class');
    	$pg_name_of_inst = Input::get('ug_name_of_inst');
    	$pg_name_of_uni = Input::get('ug_name_of_uni');
    	$pg_yop = Input::get('ug_yop');
    	$score = Input::get('score');
    	$rank = Input::get('rank');
    	$title_of_project = Input::get('title_of_project');
    	$details_of_pub = Input::get('details_of_pub');
    	$awards = Input::get('awards');
    	$employer_details_1 = Input::get('employer_details_1');
    	$employer_details_2 = Input::get('employer_details_2');
    	$employer_details_3 = Input::get('employer_details_3');
    	return View('success');
    }
}
