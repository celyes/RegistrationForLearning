<?php session_start();
require(__DIR__.'/../partials/header.php');

if(!isset($_SESSION['loggedin'])){
	$_SESSION['flash_message'] = "Login to continue";
	header('Location: ../login.php');
}
?>
<div class="container pt-5">
	
	<?php if(isset($_SESSION['flash_success'])): ?>

	<div class="alert alert-success"> <?= $_SESSION['flash_success']; ?></div>

	<?php unset($_SESSION['flash_success']); endif;?>
	
	<div class="row justify-content-center text-center">
		<div class="col pt-5">
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<button name="submit" class="btn btn-primary btn-lg">خروج</button>
			</form>
		</div>
	</div>
	
</div>
<?php 

require(__DIR__.'/../partials/footer.php');

if(isset($_POST['submit'])){
	unset($_SESSION['loggedin']);
	session_destroy();
	header('Location: ../login.php');
}
?>