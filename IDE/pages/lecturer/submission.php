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
		<div class="courses" style="margin-top:200px">
			<div class="container" style="margin-top:300px">
				<div class="panel panel-default">
				  <div class="panel-heading"><?php //$_GET['title'] ?>Title</div>
				  <div class="panel-body">
					  <form>
					    <div class="form-group row">
						    <label  class="col-sm-2 col-form-label">Date</label>
						    <div class="col-sm-10">
						      Fucking Date
						    </div>
						  </div>

						  <div class="form-group row">
						    
						    
						    <label  class="col-sm-2 col-form-label">Submission</label>
						  	<div class="col-sm-10">
						      No Fucking Submission
						    </div>
						  </div>

						  <input type="submit" class="w3-button w3-black w3-text-white" value="Download All The Fucking File">
					  </form>
				  </div>
				</div>
			</div>
		</div>
		
	</body>
	<script>


	</script>
</html>