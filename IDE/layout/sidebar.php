<?php 
  session_start();
  $link = "std.php";
  if($_SESSION['job']=="lecturer"){
    $link = "lct.php";
  }
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:300px;top:180px">
  <div class="sidebar-content">
  	<p>You are logged in as</p>
  	<h5><?php echo $_SESSION['userID'];?></h5>
  	<h5><?php echo $_SESSION['name'];?></h5>
  	<hr class="sidebar-custom-hr">
  	<img class="profile-pic" src="../../img/profile.png">
  </div>

  <a href="<?php echo $link ?>" class="w3-bar-item w3-button"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-list" aria-hidden="true"></i> MY COURSES</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> MY PROFILE</a>
  <a href="../../phpScript/logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off" ></i> LOGOUT</a>
</div>
