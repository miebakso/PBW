<?php
	include("connection.php");
	$query;
	if(isset($_POST['idxLogin'])){
		$name=$_POST['idxName'];
		$pass=$_POST['idxPass'];
		if(isset($name) && isset($pass) && $name!="" && $pass!=""){
			$query = "SELECT * FROM users WHERE username='$name'";
		}
		$res=$conn->query($query)->fetch_array();
		if($conn->query($query)->num_rows==0){
			echo "WRONG USERNAME";
		}else{
			if($pass!=$res['pass']){
				echo "WRONG PASSWORD";
			}else{
				$query="SELECT users.username, usergroups.name as groupname FROM users INNER JOIN usergroups ON users.ID_UG=usergroups.ID_UG WHERE users.username=$name";
				$res=$conn->query($query)->fetch_array();
				echo $res['groupname'];
				if($res['groupname']=="lecturer"){
					header ('Location: ../pages/lecturer/lct.php');
				}else if($res['groupname']=="student"){
					header ('Location: ../pages/student/std.php');
				}
			}
		}
	}
?>