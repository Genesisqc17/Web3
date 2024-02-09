<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/global.css" />
	</head>
	<body>
		<div id="container">
			<header>
				<?php
					if ($_SESSION["isConnected"]) {
						?>
						<a href="prive.php">Privé</a>
						 - <a href="logout.php">Déconnexion</a> 								
						<?php
					}
					else {
						?>
						<a href="index.php">Accueil</a>
						<?php
					}
				?>
			</header>