		<?php 
			$filename = basename(__FILE__);
			$requestFilename = basename($_SERVER['REQUEST_URI']);
			if($filename == $requestFilename){
				header('Location: ../index.php');
			}
		?>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>