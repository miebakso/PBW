<?php 
	include('connection.php');
	$id = $_SESSION['ID_U'];
	$query = "SELECT CONCAT(Courses.code , '/' ,  Courses.course) AS course, Courses.ID_C as id FROM Courses JOIN Enrollments ON Courses.ID_C = Enrollments.ID_C WHERE $id = Enrollments.ID_U";
	$temp =  $conn->query($query);
?>