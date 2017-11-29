<?php
    include("../../phpScript/connection.php");
    
	$query = "SELECT * FROM Activities  WHERE ID_A=".$_GET['ID_A'];
    $row=$conn->query($query)->fetch_array();
    $courseCode=$conn->query("SELECT * FROM Courses WHERE ID_C =".$row['ID_C'])->fetch_array()['code'];
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
				  <div class="panel-heading"><?php echo $row['title'];?></div>
				  <div class="panel-body">
					  <form method="get" action="../../phpScript/downloadAll.php">
                      <div class="form-group row">
						    <label  class="col-sm-2 col-form-label">Uploaded File</label>
						    <div class="col-sm-10">
                              <?php 
                                echo "<a href='../..".$row['fileDir']."' download>";
                                echo (isset($row['title'])?basename($row['fileDir']):"null");
                                echo "</a>";
                              ?>
						    </div>
						</div>
					    <div class="form-group row">
						    <label  class="col-sm-2 col-form-label">Due Date</label>
						    <div class="col-sm-10">
						      <?php echo $row['dateOpen']; ?>
						    </div>
						  </div>

						  <div class="form-group row">
						    
						    
						    <label  class="col-sm-2 col-form-label">Submission</label>
						  	<div class="col-sm-10">
						      <?php echo $row['submissions']; ?>
						    </div>
						  </div>

                          <input type="hidden" name="path" value="<?php echo dirname($row['fileDir']); ?>">
                          <input type="hidden" name="ID_A" value="<?php echo $row['ID_A']; ?>">
                          <input type="hidden" name="code" value="<?php echo $courseCode; ?>">

						  <input type="submit" class="w3-button w3-black w3-text-white" value="Download All File in Zip">
					  </form>
				  </div>
				</div>
			</div>
		</div>
		
	</body>
	<script>


	</script>
</html>