<?php
include_once 'myheader.php';

if (isset($_POST['Email'])) {
	require 'ini.php';
	$email = strip_tags($_POST['Email']);
	$password = strip_tags($_POST['Password']);
    //echo $email;
    
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$stmt = $db->prepare("select username, email, password from users where email=:email and password=:password");
		$stmt->bindParam(':email', $email, PDO::PARAM_STR, 30); 
		$stmt->bindParam(':password', $password, PDO::PARAM_STR, 30); 
		$stmt->execute();
		$count = $stmt->rowCount();
		if ($count==1) {
		  $row = $stmt->fetch();
		  echo $row['username'];
		}
		  
		$_SESSION['user'] = $email;
        $_SESSION['pass'] = $password;				 

		$db = null;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

}
?>