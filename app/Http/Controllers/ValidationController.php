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
    	$date = Input::get('date');
    	$dd_no = Input::get('dd_no');
    	$date_of_submission = Input::get('date_of_sub');
    	$amount = Input::get('amount');
    	$drawn_at = Input::get('drawn_at');
    	$appl_categ = Input::get('appl_categ');
    	$department = Input::get('department');
    	$area_of_research = Input::get('area_of_research');
    	$name = Input::get('name');
    	$father_name = Input::get('father_name');
    	$dob = Input::get('dob');
    	$category = Input::get('category');
    	$sex_marital_status = Input::get('sex_marital_status');
    	$ph = Input::get('ph');
    	$nationality = Input::get('nationality');
    	$addr_for_commn = Input::get('addr_for_commn');
    	$ug_deg = Input::get('ug_deg');
    	$ug_branch = Input::get('ug_branch');
    	$ug_gpa = Input::get('ug_gpa');
    	$ug_class = Input::get('ug_class');
    	$ug_name_of_inst = Input::get('ug_name_of_inst');
    	$ug_name_of_uni = Input::get('ug_name_of_uni');
    	$ug_yop = Input::get('ug_yop');
    	return View('success');
    }
}
