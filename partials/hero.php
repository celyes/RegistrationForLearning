<?php 
	$filename = basename(__FILE__);
	$requestFilename = basename($_SERVER['REQUEST_URI']);
	if($filename == $requestFilename){
		header('Location: ../index.php');
	}
?>

<div class="container">
	<div class="row py-5 mb-5 hero">
		<div class="col pt-5 text-center">
			<img src="assets/img/icon.png" class="hero-icon mb-4">
			<h1 class="hero-title">Learn anything</h1>
			<h5 class="text-gray-soft text-regular mt-4">Courses presented by Code Club Djelfa's members.</h5>
			<a href="#" class="btn btn-lg hero-btn mt-4">Login To Start</a>
		</div>
	</div>