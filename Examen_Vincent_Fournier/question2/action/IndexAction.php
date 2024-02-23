<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");
	require_once("action/DAO/SaveDAO.php");

	class IndexAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$errorMessage = null;

			if (!empty($_POST["username"])) {
				$success = UserDAO::authenticate($_POST["username"], $_POST["password"]);

				if ($success === true) {
					// Succès de l'authentification.
					// Ne pas modifier cette section.
					header('location:http://www.perdu.com');
					exit;
				}
				else {
					if(SaveDAO::checkfailures($_POST["username"])){
						$errorMessage = "Désolé, le compte est verrouillé";
					}else{
						$errorMessage = "Authentification erronée";
					}
				}
			}

			return compact("errorMessage");
		}

	}
