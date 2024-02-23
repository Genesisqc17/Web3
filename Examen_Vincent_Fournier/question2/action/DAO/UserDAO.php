<?php
	require_once("action/DAO/SaveDAO.php");

class UserDAO {

	/**
	 * Fonction qui retourne true si l'authentification est valide
	 * et false si elle est invalide.
	 */
	public static function authenticate($username, $password) {
		$success = false;
	
		$adminUsers = file_get_contents("db/user.txt");
		$adminUsers = explode("\n", $adminUsers);
		
		foreach ($adminUsers as $user) {
			$data = explode(":", $user);

			if ($username === $data[0] && $password === $data[1]) {
				if(SaveDAO::checkfailures($username)){
					$success = false;
					$_SESSION["PlusDeTentativeDispo"] = true;
				}else{
					$success = true;
				}
			}else{
				SaveDAO::addfailure($username);
			}
		}
		
		return $success;
	}
}