<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function validate()
    {
    	Input::get('reg_number');
    	return View('success');
    }
}
