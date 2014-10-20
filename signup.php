<?php

if (isset($_POST['Email'])) {
	require 'ini.php';
	$username = strip_tags($_POST['Username']);
	$email = strip_tags($_POST['Email']);
	$password = strip_tags($_POST['Password']);
	$zipcode = strip_tags($_POST['Zipcode']);
	if (strlen($zipcode) == 0) $zipcode='0';
	$error_message = '';
	$email_exp = '/^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$string_exp = "/^[A-Za-z0-9._-]+$/";

	if(!preg_match($email_exp,$email)) {
		$error_message .= 'Invalid characters are found in your email address. Please use valid letters and numbers.<br />';
	}
	if(!preg_match($string_exp,$username)) {
		$error_message .= 'Invalid characters are found in your name.<br />';
	}
	
	if (strlen($error_message) == 0) {
		try {
			$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
			$stmt = $db->prepare("select * from users where email=:email and password=:password");
			$stmt->execute(array(':email'=>$email,
								 ':password'=>$password)); 
			$rowCnt = $stmt->rowCount();
			if ($rowCnt == 0) {		
				$stmt = $db->prepare("insert into users (username,email,password,zipcode,createdate) values (:username,:email,:password,:zipcode,now())");
				$stmt->execute(array(':username'=>$username,
									 ':email'=>$email,
									 ':password'=>$password,
									 ':zipcode'=>$zipcode)); 
				echo "Your registration is successful! You can close the window now.";					 
			} else {
				echo "The email address has been used!";					 
			}
			$db = null;
			}
		catch(PDOException $e)
			{
			echo $e->getMessage();
			}
	}	
	else {
	    echo $error_message;
	}	

}

?>


