<?php
	session_start();
	if(!isset($_SESSION['userID'])){
		header ('Location: /PBW/IDE/index.php');
	}
?>
<header class="header-container w3-top">
	<div class="row">
		<div class="col-9">
			<div class="header-content">
				<h2>Interactive Digital Learning Environment</h2>
				<p>Faculty of Information Technology and Science</p>
				<p>Parahyangan Catholic University</p>
				<hr class="custom-hr">
			</div>
		</div>
		<div class="col-3">
			<img class="header-logo" src="../../img/logo.png" alt="Logo Unpar">
		</div>
	</div>
</header>
