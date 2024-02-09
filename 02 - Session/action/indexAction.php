<?php
	session_start(); // Démarre une session (charge les variables de session. si nouvelle session, fait un nouvel id)

	function execute() {
		$email = null;
		$connectionError = false;

		if (empty($_SESSION["isConnected"])) {
			$_SESSION["isConnected"] = false;
		}

		if ($_SESSION["isConnected"]) {
			header("location:prive.php");
			exit;
		}

		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {
				$_SESSION["isConnected"] = true;
				$email = $_POST["courriel"];
				$_SESSION["courriel"] = $email;
			}
			else {
				$connectionError = true;
			}
		}
		
		return compact("email", "connectionError");
	}