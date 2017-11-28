<?php
	include('connection.php');
	$id = $_GET['id'];
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
	$ct=1;
	while ($ct<6) {
		echo "
		<div class='panel panel-default'>
			<div class='panel-body'>
				<div><i class='fa fa-newspaper-o' aria-hidden='true'></i><span id='topicTitle'> Topic $ct</span></div>
				
				<div>";

			$query = "SELECT * FROM Activities  WHERE ID_C = $id AND topic = $ct";

			if($result=$conn->query($query)){
				while($row=$result->fetch_array()){
					if($row['ID_AT']==2){
						echo "<div><a href='../..".$row['fileDir']."' download>";
					}else{
						if($_SESSION['job']=='lecturer'){
							echo "<div><a href='submission.php'>";
						}else{
							echo "<div><a href='submit.php?ID_A=".$row['ID_A']."'>";
						}
					}
					echo (isset($row['title'])?$row['title']:"null");
					echo "</a></div>";
				}
			}

		echo "
				</div>";

				if(isset($_SESSION['job']) && $_SESSION['job']=='lecturer'){
					echo "
					<div class='add-activity' style='margin-top: 10px;'>
				
						<a href='#' class='btn btn-secondary btn-sm active add_act_btn' role='button' id='add' aria-pressed='true'>Add Activity</a>
				
					</div>
					";
				}
		echo "
			</div>

		</div>
		";
		$ct++;
	}
?>

