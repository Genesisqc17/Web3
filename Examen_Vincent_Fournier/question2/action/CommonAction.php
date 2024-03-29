<?php
	session_start();

	abstract class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;
		public static $VISIBILITY_MODERATOR = 2;
		public static $VISIBILITY_ADMINISTRATOR = 3;
	
		private $pageVisibility;
	
		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
			$_SESSION["PlusDeTentativeDispo"] = false;
		}
		
		public function execute() {
		
			if (isset($_GET["action"]) && $_GET["action"] === "logout") {
				session_unset();
				session_destroy();
			}
			
			if (!isset($_SESSION["user_visibility"])) {
				$_SESSION["user_visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
		
			if ($this->pageVisibility > $_SESSION["user_visibility"]) {
				header("location:index.php");
				exit;
			}
			
			return $this->executeAction();
		}
		
		abstract protected function executeAction();
	
		protected function setUserCredentials($username, $visibility) {
			$_SESSION["username"] = $username;
			$_SESSION["user_visibility"] = $visibility;
		}
	
		public function getUsername() {
			$name = null;
			
			if (isset($_SESSION["username"])) {
				$name = $_SESSION["username"];
			}
			
			return $name;
		}
		
		public function isLoggedIn() {
			$loggedIn = false;
			
			if ($_SESSION["user_visibility"] > CommonAction::$VISIBILITY_PUBLIC) {
				$loggedIn = true;
			}
			
			return $loggedIn;
		}
		
		public function getCurrentPage() {
			return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
		}
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	