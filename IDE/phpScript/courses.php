<?php 
	include('connection.php');
	$id = $_SESSION['userID']
	$query = "SELECT Courses.code + '/' + Courses.coruses as course, Courses.ID_C as id
			FROM Courses JOIN Enrollments
			ON Courses.ID_C = Enrollments.ID_C
			WHERE $id = Enrollments.ID_U";
	$res=$conn->query($query)->fetch_array();
?>