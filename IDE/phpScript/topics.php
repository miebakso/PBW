<?php
	include('connection.php');
	$id = $_GET['id'];
	$query = "SELECT ID_A, topic  FROM Activities  WHERE ID_C = $id";
	$temp =  $conn->query($query);
?>