<?php 
	$_SESSION = array();
	session_destroy();
	header ('Location: /PBW/IDE/index.php');
?>