<?php
    /* at the top of 'check.php' */
    $filename = __FILE__;
	$requestFilename = basename($_SERVER['REQUEST_URI']);
	echo $filename;
	echo "<br>".$_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'];
    
?>