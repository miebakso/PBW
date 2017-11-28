<?php
	include('connection.php');
	$id = $_GET['id'];
?>

<div class="panel panel-default">
	<div class="panel-heading">
	<div class="overview"><?php echo $_GET['courseTitle'] ?></div>
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
					echo "<div>".isset($row['title'])?$row['title']:"null"."</div>";
				}
			}

		echo "
				</div>";

				if(isset($_SESSION['job']) && $_SESSION['job']=="lecturer"){
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

