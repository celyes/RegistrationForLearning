<?php require(__DIR__.'/partials/header.php'); ?>		
<?php require(__DIR__.'/partials/navbar.php'); ?>
<div class="container">

	<div class="row">
		<div class="col-md-4 offset-md-4 justify-content-center mt-5">
			<div class="text-center">
				<img src="assets/img/icon.png" class="hero-icon mb-4">
			</div>
			<?php if(isset($_SESSION['flash_message'])){ ?>
			<div class="alert alert-danger">	
				<small><?= $_SESSION['flash_message']; ?></small>	
			</div>
			<?php }?>
			<form method="POST" action="<?php echo htmlspecialchars('actions/login.php')?>">
				
				<div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" name="email" id="email-form" required="required">
				</div>
				<div class="form-group">
				    <label for="pass-form">Password <a href="#" class="float-right text-muted"><small>Forgot password?</small></a></label>
				    <input type="password" class="form-control" name="pass" id="pass-form" required="required">
				</div>
				<div class="form-group">
				    
				    <input type="submit" value="Sign In" class="btn btn-violet mt-2" name="login" id="btn-login">
				</div>
			</form>
			<div class="my-3 text-center">
				<p class="text-muted"><small>Don't have an account yet? <a href="register.php"> Sign up</a></small></p>
			</div>	
		</div>
		<?php session_destroy(); ?>
	</div>
<?php require(__DIR__.'/partials/footer.php'); ?>	