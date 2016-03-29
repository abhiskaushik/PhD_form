<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;
use View;

use App\Helpers\Doc2text;
use App\Helpers\JSONResponse;

class testController extends Controller {
public function upload() {

  // getting all of the post data
  $file = array('doc' => Input::file('doc'));
  // setting up rules
  $rules = array('doc' => 'required',); 
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);

  if ($validator->fails()) {
    // send back to the page with the input data and errors
    // return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('doc')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      
      $extension = Input::file('doc')->getClientOriginalExtension(); // getting doc extension
    
      if($extension == 'doc' || $extension=='docx'){
          
      $fileName = rand(11111,99999).'.'.$extension; // renameing doc
      Input::file('doc')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
        $path = $destinationPath.'/'.$fileName;
        $docObj = Doc2text::construct($path);     
        $temp = JSONResponse::response($docObj);
        $details=json_decode(file_get_contents('details.json'));
        array_push($details, json_decode($temp));
        file_put_contents('details.json', json_encode($details));
        // dd(json_decode(file_get_contents('details.json')));
         $data=json_decode(file_get_contents('details.json'));
        return View::make('success')->with('data', $data);

      // return Redirect::to('admin');
      }
      else{
        // Session::flash('error', 'uploaded file is not of correct format');
        
      }
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');

      // return Redirect::to('upload');
    }
  }
}
}