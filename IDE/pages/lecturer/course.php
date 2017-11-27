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
			<?php include('../../phpScript/topics.php'); ?>
		</div>
		
	</body>
	<script>
		// Get the modal
		var modal = document.getElementById('modal');

		
		$('#add').click(function(){
			//console.log($('input[name=type]:checked', '#myForm').val());
			if($('input[name=type]:checked', '#myForm').val()==1){
				window.location = "addingActivity.php?id_a=1&type=assignment&<?php echo "id=".$_GET['id']."&courseTitle=".$_GET['courseTitle']; ?>";
			} else if($('input[name=type]:checked', '#myForm').val()==0){
				window.location = "addingActivity.php?id_a=2&type=files&<?php echo "id=".$_GET['id']."&courseTitle=".$_GET['courseTitle']; ?>";
			}
		});
		
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</html>