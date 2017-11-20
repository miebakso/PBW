<!-- include connection -->
<?php
	include("../../phpScript/connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IDE</title>
		<?php include("../../layout/style.php"); ?>
	</head>
	
	<body>
		<?php $myCourses = false ?>
		<!-- include header -->
		<?php include("../../layout/header.php"); ?>
		<div class="w3-main">
			<!-- include sidebar -->
			<?php include("../../layout/sidebar.php"); ?>
		</div>
		<div class="courses">
			<?php include('../../phpScript/courses.php'); ?>

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
					  	<a href='courses.php?id=$courseID&courseTitle=$course'>$course</a>
					  </div>
					</div>
					";
				}
				
			?>
		</div>
	</body>

</html>