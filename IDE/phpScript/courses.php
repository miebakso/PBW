<?php 
	include('connection.php');
	$id = $_SESSION['ID_U'];
	$query = "SELECT CONCAT(Courses.code , '/' ,  Courses.course) AS course, Courses.ID_C as id FROM Courses JOIN Enrollments ON Courses.ID_C = Enrollments.ID_C WHERE $id = Enrollments.ID_U";
	$temp =  $conn->query($query);
?>

<div class="panel panel-default">
	<div class="panel-heading">
	<div class="overview">Course Overview</div>
	</div>
</div>
<?php 
	while ($row = $temp->fetch_array()) {
		$course = $row['course'];
		$courseID = $row['id'];
		echo "
		<div class='panel panel-default'>
			<div class='panel-body'>
			<a href='course.php?id=$courseID&courseTitle=$course'>$course</a>
			</div>
		</div>
		";
	}
?>