<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SavePhd;

class SavePhdController extends Controller
{
    public function save(Request $request)
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
        $candidate->degreeName = $request->input('ug_deg');
        $candidate->branch = $request->input('ug_branch');
        // $candidate->gpa = $details['ug_gpa'];
        // replace this field by gpa
        $candidate->class = $request->input('ug_class');
        $candidate->institutionName = $request->input('ug_name_of_inst');
        $candidate->universityName= $request->input('ug_name_of_uni');
        $candidate->yop = $request->input('ug_yop');
        $candidate->degreeName = $request->input('pg_deg');
        $candidate->branch = $request->input('pg_branch');
        // $candidate->gpa = $details['pg_gpa'];
        $candidate->class = $request->input('pg_class');
        $candidate->institutionName = $request->input('pg_name_of_inst');
        $candidate->universityName= $request->input('pg_name_of_uni');
        $candidate->yop = $request->input('pg_yop');
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

        dd($request->input('father_name'));

        return 'hey';
	}
}
