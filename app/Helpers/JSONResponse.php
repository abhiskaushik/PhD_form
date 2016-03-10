<?php
namespace App\Helpers;
use Log;

class JSONResponse
{
	public static function response($txt)
	{
		$encoded_json = json_encode($txt);

		//Return JSON response.
		return $encoded_json;
	}
}
?>
