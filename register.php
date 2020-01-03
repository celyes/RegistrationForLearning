<?php require(__DIR__.'/partials/header.php'); ?>		
<?php require(__DIR__.'/partials/navbar.php'); ?>
<div class="container">

	<div class="row">
		<div class="col-md-6 offset-md-3 justify-content-center mt-5">
			<div class="text-center">
				<img src="assets/img/icon.png" class="hero-icon mb-4">
			</div>
		
			<?php if(isset($_SESSION['flash_message'])){ ?>
			<div class="alert alert-danger">	
				<small><?= $_SESSION['flash_message']; ?></small>	
			</div>
			<?php }?>
			<form method="POST" action="<?= htmlspecialchars('actions/register.php')?>">
				<div class="row">
					<div class="form-group col">
					    <label for="email">First Name 
					    	<span class="red">*</span>
					    </label>
					    <input type="text" class="form-control" value="<?= $_SESSION['firstname']; ?>" name="firstname" id="firstname-form" required="required">
					</div>
					<div class="form-group col">
					    <label for="email">Last Name 
					    	<span class="red">*</span>
					    </label>
					    <input type="text" class="form-control" value="<?= $_SESSION['lastname']; ?>" name="lastname" id="lastname-form" required="required">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
					    <label for="email">Email address
					    	<span class="red">*</span>
					    </label>
					    <input type="text" class="form-control" value="<?= $_SESSION['email']; ?>" name="email" id="email-form" required="required">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
					    <label for="pass-form">Password 
					    	<span class="red">*</span>
					    </label>
					    <input type="password" class="form-control" name="pass" id="pass-form" required="required">
					</div>
				</div>
				<div class="form-group">
				    <input type="submit" value="Sign Up" class="btn btn-violet mt-2" name="submit" id="btn-login">
				</div>
			</form>
			<div class="my-5 text-center">
				<p class="text-muted">
					<small>By clicking "Sign up" you agree to our <a href="#"> Terms of Service.</a></small>
					<br>	
					<small>Already have an account?  <a href="login.php"> Sign in</a></small></p>
			</div>	
		</div>
		<?php session_destroy(); ?>
	</div>
<?php require(__DIR__.'/partials/footer.php'); ?>	