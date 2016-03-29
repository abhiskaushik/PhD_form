<?php

namespace App\Helpers;

class Doc2text {
	private $filename;
	
	public static function construct($filePath) {
		return Self::convertToText($filePath);
	}
	
	public static function readDoc($filename)	{
		$fileHandle = fopen($filename, "r");
		$line = @fread($fileHandle, filesize($filename)); 
		echo $line;

		
		$pattern = '/[:,]/';
		$fields = preg_split($pattern, $line);
		$fieldIds = array();
		$fieldValues = array();
		$fieldAndFieldValues = array();
		$count = 0;
		for($i = 0; $i < sizeof($fields); $i++)
		{
			if($i%2 == 0)
			{
				$fieldIds[$count] = $fields[$i];
			} 
			else
			{
				$fieldValues[$count] = $fields[$i];
				$fieldAndFieldValues[$fieldIds[$count]] = $fieldValues[$count];
				$count++;
			}
		}
		return $fieldAndFieldValues;
	}

	public static function readDocx($filename){

		$striped_content = '';
		$content = '';

		$zip = zip_open($filename);

		if (!$zip || is_numeric($zip)) return false;

		while ($zip_entry = zip_read($zip)) {

			if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

			if (zip_entry_name($zip_entry) != "word/document.xml") continue;

			$content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

			zip_entry_close($zip_entry);
		}// end while

		zip_close($zip);

		$content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
		$content = str_replace('</w:r></w:p>', "\r\n", $content);
		$striped_content = strip_tags($content);

		return $striped_content;
	}
	
	public static function convertToText($filename) {
		// $path = storage_path();
		// $file = $path.'/'.$filename;
		// if(($file) && !file_exists($file)) {
		// 	return "File Not exists";
		// }
		
		$fileArray = pathinfo($filename);
		$file_ext  = $fileArray['extension'];
		if($file_ext == "doc" || $file_ext == "docx")
		{
			if($file_ext == "doc") {
				return self::readDoc($filename);
			} 
			else {
				return self::readDocx($filename);
			}
		} else {
			return "Invalid File Type";
		}
	}
}
?>
