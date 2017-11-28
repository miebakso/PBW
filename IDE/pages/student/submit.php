<?php
	include("../../phpScript/connection.php");

	$activity_id = $_GET['ID_A'];
	$ID_U = $_SESSION['ID_U'];

	$query = 'SELECT * FROM activites WHERE ID_A = $activity_id';
	$temp2 = $conn->query($query)->fetch_array();
	$query = 'SELECT * FROM submissions WHERE ID_U = $ID_U AND ID_A = $activity_id';
	$temp =  $conn->query($query);
	$check = false;
	$data;
	if($temp->num_rows()>0){
		$check = true;
		$data = $temp->fetch_array();
	}

	//$_GET['title'] untuk judul course

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
		<div class="courses" style="margin-top:200px">
			<div class="container" style="margin-top:300px">
				<div class="panel panel-default">
				  <div class="panel-heading"><?php $temp2['title'] ?>Title</div>
				  <div class="panel-body">
					  <form 
					  	<?php 
					  		if($check){
					  			echo "action='../../phpScript/update.php' method='post'>";
					  			echo "
					  				<input type='hidden' name='ID_A' value='$activity_id'>
					    		";
					  		} else {
					  			echo "action='../../phpScript/insert.php' method='post'> ";
					  		} 
					  


					    ?>

					    <div class="form-group row">
						    <label  class="col-sm-2 col-form-label">Due Date</label>
						    <div class="col-sm-10">
						      <?php echo $temp2['dateClose']; ?>
						    </div>
						  </div>

						  <div class="form-group row">
						    
						    
						    <label  class="col-sm-2 col-form-label">Select file</label>
						  	<div class="col-sm-10">
						      <input class="inputfile" type="file" name="file" id="file"/>
						    </div>
						  </div>

						  <input type="submit" class="w3-button w3-black w3-text-white" value="Submit">
					  </form>
				  </div>
				</div>
			</div>
		</div>
		
	</body>
	<script>


	</script>
</html>