<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;
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
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('doc')->isValid()) {
      $destinationPath = 'uploads'; // upload path
            
      $filelist = glob("*.doc");
      echo $filelist;
      $extension = Input::file('doc')->getClientOriginalExtension(); // getting doc extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing doc
      Input::file('doc')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
}
}