<?php
	session_start();

	function execute() {		
		if (!empty($_GET["clear"])) {
			session_destroy();
			session_start();
		}	
		
		if (empty($_SESSION["posts"])) {
			$_SESSION["posts"] = [];
		}
		
		if (!empty($_POST["text"])) {
			$post = [];
			$post["text"] = $_POST["text"];
			$post["x"] = $_POST["x"];
			$post["y"] = $_POST["y"];
			
			$_SESSION["posts"][] = $post;
		}		
		
		$memos = $_SESSION["posts"];
		
		return compact("memos");
	}

