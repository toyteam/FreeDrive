<?php 

namespace App\Http\Controllers;
/**
* 
*/
class FileController extends Controller
{
		
	public function uploadFile()
	{
		if (empty($_FILES)) 
		{
			return "empty";
		}

		if ($_FILES["file"]["error"]) 
		{
			return $_FILES["file"]["error"];
		}

		$file_name = $_FILES["file"]["name"];
		$file_name_md5 = md5($file_name);

		move_uploaded_file($_FILES["file"]["tmp_name"], base_path("files/$file_name_md5"));

		return "success";

	}
}