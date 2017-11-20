<?php
	include("../../phpScript/connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IDE</title>
		<!-- include style -->
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
			<?php include('../../phpScript/activities.php'); ?>

			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<div class="overview"><?php echo $_GET['courseTitle'] ?></div>
			  </div>
			</div>
			<?php 
				while ($row = $temp->fetch_array()) {
					echo "
					<div class='panel panel-default'>
						<div class='panel-body'>
					  	<a href='#'><i class='fa fa-newspaper-o' aria-hidden='true'></i> Topic ".$row['topic']."</a>
					  	<br>
					  	<div class='add-activity' style='margin-top: 10px;'>
				  		<a href='#'' style='width: 100px;' class='btn btn-secondary active' role='button' aria-pressed='true'>Add</a>
					  	</div>
					  </div>

					</div>
					";
				}
				
			?>
		</div>
	</body>
</html>