<?php
	include('connection.php');
	$id = $_GET['id'];
	$query = "SELECT ID_A, topic  FROM Activities  WHERE ID_C = $id";
	$temp =  $conn->query($query);
?>

<div class="panel panel-default">
	<div class="panel-heading">
	<div class="overview"><?php echo $_GET['courseTitle'] ?></div>
	</div>
</div>
<div id="modal" class="w3-modal">
	<div class="w3-modal-content" style="width:40%">
		<div class="w3-container w3-white">
			<span onclick="document.getElementById('modal').style.display='none'" class="w3-button w3-display-topright" style="margin:5px">&times;</span>
			<h3>Select Activity</h3>
			<div id="myForm"> 
				<input type="radio" name="type" value="1">
				<i class="fa fa-file-text-o" aria-hidden="true"> Assignment</i>
				<br>
				<input type="radio" name="type" value="0" style="margin-top: 10px">
				<i class="fa fa-file-o" aria-hidden="true"> File</i>
				<br>
				<button id="add" style="margin: 20px 0 20px 0"  class="w3-button w3-black w3-text-white">Add</button>

			</div>
		</div>
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
			
				<a href='#' onclick=document.getElementById('modal').style.display='block' class='btn btn-secondary btn-sm active' role='button' aria-pressed='true'>Add Activity</a>
			
			</div>

			</div>

		</div>
		";
	}
	
?>