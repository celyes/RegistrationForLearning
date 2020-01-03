<?php 
	$filename = basename(__FILE__);
	$requestFilename = basename($_SERVER['REQUEST_URI']);
	if($filename == $requestFilename){
		header('Location: ../index.php');
	}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
  	<a class="navbar-brand" href="index.php">Code Club Djelfa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Courses</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#">
          About
        </a>
        
      </li>
    </ul>
    <div class="my-2 my-lg-0">
    	<ul class="navbar-nav mr-auto">
    		<li class="nav-item">
		        <a class="nav-link" href="#">
		        	<span class="fas fa-search"></span>
		        </a>
	  	    </li>
	    	<li class="nav-item">
		        <a class="nav-link" href="register.php">Sign up</a>
	  	    </li>
	    	<li class="nav-item">
		        <a class="nav-link" href="login.php">Sign in</a>
	  	    </li>
	  	</ul>
    </div>
  </div>
  </div>
</nav>