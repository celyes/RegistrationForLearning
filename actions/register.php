<?php
require_once('config.php');

function validateData($data) {
  	return trim(stripslashes(htmlspecialchars($data)));
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$_SESSION["firstname"] = $_POST["firstname"];
	$_SESSION["lastname"] = $_POST["lastname"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["pass"] = $_POST["pass"];
	
	$query = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
	$query->bind_param("s", $_POST["email"]);
	$query->execute();
	$query->store_result();
	 
 	if($query->num_rows > 0){

		$_SESSION["flash_message"] = "Email already registered!";
		header('Location:'. $_SERVER['HTTP_REFERER']);
		exit;	

	}
	else{

		// register the user
		$firstname = validateData($_POST["firstname"]);
		$lastname = validateData($_POST["lastname"]);
		$email = validateData($_POST["email"]);

		if(strlen($_POST["pass"]) < 6){
			$_SESSION["flash_message"] = "Password must contain at least 6 characters!";	
			header('Location:'. $_SERVER['HTTP_REFERER']);
			exit;
		}else{
			$pass= password_hash($_POST["pass"], PASSWORD_DEFAULT);
		}


		if($firstname == '' || $lastname == '' || $email == '' || $pass == ''){
			$_SESSION["flash_message"] = "Fill up all the fields!";	
			header('Location:'. $_SERVER['HTTP_REFERER']);
			exit;
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){	
			header('Location:'. $_SERVER['HTTP_REFERER']);
			exit;
		}

		$sql = "INSERT INTO users(firstname, lastname, email, password) VALUES(?,?,?,?)";
		$_SESSION = [];
		if($query = $mysqli->prepare($sql)){
			$query->bind_param('ssss', $firstname, $lastname, $email, $pass);
			$query->execute();	
			if(count($query->store_result()) > 0){
				
				$_SESSION["flash_success"] = "successfully registered!";
				header('Location: ../admin/index.php');
			}
		}
		$query->close();
		$mysqli->close();
	}

}