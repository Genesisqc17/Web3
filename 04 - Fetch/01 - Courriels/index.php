<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Mon engin de courriels</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/global.css">
			<script>
				const checkEmails = () => {
					let username = "ken";//prompt("Enter your username");
					let formData = new FormData(); // <form...>
					formData.append("username", username); // <input type="text" name="username" value="asdf" >
					formData.append("password", "AAAaaa111");

					fetch("ajax.php", {
						method : "post",
						body : formData,
					})
					.then(response => response.json()) // JSON.parse
					.then(data => {
						console.log(data);
						let emailNode = document.querySelector("#contenantCourriels");
						emailNode.innerText = data;
					})
				}		
			</script>
	</head>
	<body>
		<div class="container">
			<h1>Mes courriels</h1>
	
			<p>Vous avez actuellement</p>
			<div id="contenantCourriels">--</div> 
			<p>nouveaux courriels.</p>

			<div class="refresh-section">
				<button onclick="checkEmails()">
					<img src="images/refresh.png" alt="Rafraîchir">
				</button>
			</div>
		</div>
	</body>
</html>
