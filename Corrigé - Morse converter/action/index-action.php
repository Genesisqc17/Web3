<?php
	require_once("action/utils/morse-utils.php");

	function execute() {
		$chaine = null;

		if (isset($_POST["ascii"]) && strlen($_POST["ascii"]) > 0) {
			$chaine = encodeMorse($_POST["ascii"]);
		}
		else if (isset($_POST["morse"])) {
			$chaine = decodeMorse($_POST["morse"]);
		}

		return $chaine;
	}
