<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function adminView(){
	    $data=json_decode(file_get_contents('details.json'));
	    return View::make('admin')->with('data', $data);
	}
}
