<?php session_start(); ?> 

<?php require(__DIR__.'/../partials/header.php'); ?>

<div class="container">
	
	<?php if(isset($_SESSION['flash_success'])): ?>

	<div class="alert alert-success"> <?= $_SESSION['flash_success']; ?></div>

	<?php session_destroy(); endif;?>

</div>
<?php require(__DIR__.'/../partials/footer.php'); ?>