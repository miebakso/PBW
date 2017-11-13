<!DOCTYPE html>
<html>

<head>
	<?php include("layout/style.php"); ?>
	<title>IDE</title>
</head>

<body id="home">
	<div id="topnav">
		<button class="w3-right w3-opacity w3-white w3-button w3-padding-small">Help</button>
		<button class="w3-right w3-opacity w3-white w3-button w3-padding-small">Contact us</button>
		<button class="w3-right w3-opacity w3-white w3-button w3-padding-small">About us</button>
	</div>

	<div id="title">
		<h1>IDE</h1>
		<h4>Interactive Digital Learning Environment</h4>
		<p>-Faculty of Information Technology and Science-</p>
		<button onclick="document.getElementById('modal').style.display='block'" class="w3-button w3-white w3-padding-medium w3-opacity">Login</button>
	</div>
	<!-- The Modal -->
	<div id="modal" class="w3-modal">
		<div class="w3-modal-content" style="width:40%">
			<div class="w3-container w3-white" style="border:5px solid black">
				<span onclick="document.getElementById('modal').style.display='none'" class="w3-button w3-display-topright" style="margin:5px">&times;</span>
				<h1>Login</h1>
				<form method="POST" action="phpScript/login.php">
					<input class="w3-input" type="text" name="name" id="" placeholder="Username"> <br>
					<input class="w3-input" type="password" name="pass" id="" placeholder="Password"> <br>
					<input type="submit" name="" id="" value="LOGIN" class="w3-button w3-black w3-text-white">
					<p><a href="">Forget password</a> or <a href="">forget username</a>?</p>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<p>© Developed by Maria Veronica Claudia Muljana, S.T.</p>
	</div>
</body>

<script>
	// Get the modal
	var modal = document.getElementById('modal');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

</html>