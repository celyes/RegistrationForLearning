<?php 
	session_start();
	$filename = basename(__FILE__);
	$requestFilename = basename($_SERVER['REQUEST_URI']);
	if($filename == $requestFilename){
		header('Location: ../index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="icon" type="img/png" href="assets/img/icon.png">
	<title>IT Courses for all levels</title>
</head>
<body>