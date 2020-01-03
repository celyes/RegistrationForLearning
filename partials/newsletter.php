<?php 
	$filename = basename(__FILE__);
	$requestFilename = basename($_SERVER['REQUEST_URI']);
	if($filename == $requestFilename){
		header('Location: ../index.php');
	}
?>
<div class="row py-4 newsletter">
	<div class="col">
		<h5>Get new courses in your inbox!</h5>
		<p class="text-muted">New courses or big discounts. Never spam</p>
	</div>
	<div class="col p-0">
	<form>
	  <div class="form-row justify-content-end">
	    <div class="col-auto">
	      <label class="sr-only" for="inlineFormInput">Name</label>
	      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="E-Mail">
	    </div>
	    <div class="col-auto">
	      <a href="#" type="submit" class="btn btn-violet mb-2">Subscribe</a>
	    </div>
	  </div>
	</form>
	</div>
</div>

<div class="row py-4">
	<div class="col">
		<p class="text-muted">
			<small>Code Club Djelfa &copy; 2019</small>
		</p>
	</div>
</div>