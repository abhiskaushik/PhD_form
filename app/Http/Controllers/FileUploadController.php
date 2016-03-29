<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use View;
use Redirect;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Doc2text;
use App\Helpers\JSONResponse;
class FileUploadController extends Controller
{
	public function upload() {

  		// getting all of the post $data
		$file = array('doc' => Input::file('doc'));
  		// setting up $rules
		$rules = array('doc' => 'required',); 
  		// doing the validation, passing post $data, $rules and the messages
		$validator = Validator::make($file, $rules);

		if ($validator->fails()) {
    		// send back to the page with the input $data and errors
    		return Redirect::to('error')->withInput()->withErrors($validator);
		}
		else {
	    		// checking $file is valid.
			if (Input::file('doc')->isValid()) 
			{
	      		$destinationPath = 'uploads'; // upload $path
	      		$name=Input::get('full_name');            
	      		
	      		$extension = Input::file('doc')->getClientOriginalExtension(); // getting doc $extension
	      
	      		if($extension == 'doc' || $extension=='docx'){
	      	
		    		$fileName = rand(11111,99999).'.'.$extension; // renameing doc
		      		Input::file('doc')->move($destinationPath, $fileName); // uploading $file to given $path
		      		// sending back with message
				    
				    $path = $destinationPath.'/'.$fileName;
				    $docObj = Doc2text::construct($path);     
				    $temp = JSONResponse::response($docObj);
				    	
						
						$temp = str_replace("\ufeff",'',$temp); 
						$temp = str_replace('\n','', $temp);
						
						
				    $details = json_decode(file_get_contents('details.json'));
				    array_push($details, json_decode($temp));
				    file_put_contents('details.json', json_encode($details));
				     dd(json_decode(file_get_contents('details.json')));
				    
				    // die();
				    $data = json_decode(file_get_contents('details.json'));
		        	// return View::make('success')->with('data', $data);
	  			}
				else
				{
					$message = 'Invalid file format';
					return View::make('error')->with('message', $message);
				}
			}
			else 
			{
			    // sending back with error $message.
				$message = 'Uploaded $file is not valid';
				return View::make('error')->with('message', $message);
			}
		}
	}
}
