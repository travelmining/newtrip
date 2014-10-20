<?php
	$fileName = $_FILES["file1"]["name"]; // The file name
	$fileTmpLoc = $_FILES["file1"]["tmp_name"];
	$fileType = $_FILES["file1"]["type"];
	$fileSize = $_FILES["file1"]["size"];
	$fileErrorMsg = $_FILES["file1"]["error"];
	
	if (!$fileTmpLoc){
		echo "ERROR: Please browse for a file before clicking the upload button."; 
     }
	if(move_uploaded_file($fileTmpLoc, $fileName)) {
	    echo "$fileName upload is complete succesfully. You can close the window"; 
	}
	else  { 
	    echo "move_uploaded_file function failed"; 
	}
?>