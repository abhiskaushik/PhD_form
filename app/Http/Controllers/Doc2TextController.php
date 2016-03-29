<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Helpers\Doc2text;
use App\Helpers\JSONResponse;

class Doc2TextController extends Controller
{
	public function doc2text()
	{
	    $docObj = Doc2text::construct("hell.doc");	    
		return JSONResponse::response($docObj);
	}
}
