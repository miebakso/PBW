<?php
	include("../../phpScript/connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IDE</title>
		<!-- include style -->
		<?php include("../../layout/style.php"); ?>
		<style type="text/css">
			legend {
			    width:inherit; /* Or auto */
			    
			    padding: 0 10px; /* To give a bit of padding on the left and right */
			    font-size: 14px;
			    border-bottom:none;
			}

			fieldset {
					border: solid 2px #DDD ;
			    padding: 0 10px 10px 10px;
			    margin-bottom: 20px;
			}

			.inputfile {
				width: 0.1px;
				height: 0.1px;
				opacity: 0;
				overflow: hidden;
				position: absolute;
				z-index: -1;
			}
			#filename:hover{
				cursor:pointer;
			}
		</style>
	</head>
	
	<body>
		<?php $myCourses = false ?>
		<!-- include header -->
		<?php include("../../layout/header.php"); ?>
		<div class="w3-main">
			<!-- include sidebar -->
			<?php include("../../layout/sidebar.php"); ?>
		</div>
		<div class="courses" style="height: 700px;margin-top:185px">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<div class="overview">Adding new <?php echo($_GET["type"]=="1")?"Assignment":"File";?></div>
			  </div>
			</div>
			<div>
				<button id="all" style="right: 20px; position: absolute; margin-right: 20px" class="w3-button w3-black w3-text-white">Collapse All</button>
			</div>
			<div style="margin-top: 100px; padding: 5px;">
				<div style="padding: 0 10%">
				<form method="post" action="../../phpScript/upload.php" enctype="multipart/form-data">
				 	<fieldset >
				  	<legend>
				  		<div id="general" class="w3-button w3-black w3-text-white">General <i class="fa fa-caret-down" aria-hidden="true"></i></div>
				  	</legend>

				  	<div id="one">
					  	<div class="form-group row">
						    <label  style="color: red" class="col-sm-2 col-form-label"><center>Name*</center></label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="" name="title" required>
						    </div>
						    <label style="margin-top: 20px" class="col-sm-2 col-form-label"><center>Description</center></label>
						    <div style="margin-top: 5px" class="col-sm-10">
						      <textarea class="form-control" id="" rows="3"></textarea>
						    </div>
						  </div>
						</div>

				 	</fieldset>

				 	<?php
							if($_GET["type"]=="assignment"){
									echo '<fieldset >
				  	<legend>
				  		<div id="avail" class="w3-button w3-black w3-text-white">Availability <i class="fa fa-caret-down" aria-hidden="true"></i></div>
				  	</legend>
				  	

				  	<div id="two">
					  	<div class="form-group row">
						    <label  class="col-sm-2 col-form-label"><center>Allow submission from <i class="fa fa-question-circle" aria-hidden="true"></i></center></label>
						    <div class="col-sm-2">
						      <input type="date" class="form-control" id="" name="startdate" >
						      
						    </div>
						    <div class="col-sm-2">
						      
						      <input type="checkbox" class="form-check-input" name="isStartdate">
						     	<label class="form-check-label">
						      Enable
						    	</label>
						    </div>
						  </div>

						  <div class="form-group row">
						    <label  class="col-sm-2 col-form-label"><center>Due date <i class="fa fa-question-circle" aria-hidden="true"></i></center></label>
						    <div class="col-sm-2">
						      <input type="date" class="form-control" id="" name="duedate">
						    </div>
						    <div class="col-sm-2">
					      	<input type="checkbox" class="form-check-input" name="isDuedate">
						     	<label class="form-check-label">
						      Enable
						    	</label>
						    </div>
						  </div>

						</div>';
							}
					 ?>


				 	</fieldset>

				 	<fieldset >
				  	<legend>
				  		<div id="content" class="w3-button w3-black w3-text-white">Content <i class="fa fa-caret-down" aria-hidden="true"></i></div>
				  	</legend>
				  	
				  	<div id="three">
					  	<label class="custom-file">
						    <input class="inputfile" type="file" name="file" id="file"/>
						    <label for="file"><span id="filename">Select files </span><i class="fa fa-question-circle" aria-hidden="true"> </i></label>
						  </label>
						</div>
				 	</fieldset>
							<input type="hidden" name="ID_A" value="<?php echo $_GET['id_a']?>">
							<input type="hidden" name="ID" value="<?php echo $_GET['id']?>">
							<input type="hidden" name="actType" value="<?php echo $_GET['type']?>">
							<input type="hidden" name="courseTitle" value="<?php echo $_GET['courseTitle']?>">
							<input type="hidden" name="topic" value="<?php echo $_GET['topic']?>">
				 	<center><input type="submit" class="w3-button w3-black w3-text-white" value="SAVE AND RETURN TO COURSE"> <div id="cancel" class="w3-button w3-black w3-text-white">CANCEL</div></center>
				</form>
				</div>
			</div>
		</div>
	</body>
	<script>
		$(document).ready(function(){
			$('#all').click( function() {
				if($('#one').is(":visible") || $('#two').is(":visible") || $('#three').is(":visible")){
					$("#all").html("Expand All");
					$('#one').hide();
					$('#two').hide();
					$('#three').hide();
				} else {
					$("#all").html("Collapse All");
					$('#one').show();
					$('#two').show();
					$('#three').show();
				}
			});

			$('#general').click( function() {
				if($('#one').is(":visible")){
					$('#one').hide();
				} else {
					$('#one').show();
				}
			});

			$('#avail').click( function() {
				if($('#two').is(":visible")){
					$('#two').hide();
				} else {
					$('#two').show();
				}
			});

			$('#content').click( function() {
				if($('#three').is(":visible")){
					$('#three').hide();
				} else {
					$('#three').show();
				}
			});

			$('#cancel').click(function(){
				window.location="course.php?&<?php echo "id=".$_GET['id']."&courseTitle=".$_GET['courseTitle']; ?>";
			});
			
			$('#file').change(function(e){
					$("#filename").html(e.target.files[0].name+" ");
			});
		});
	</script>
</html>