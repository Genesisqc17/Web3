<?php
    require_once("action/DAO/Connection.php");

    class RequeteDAO {
        public static function requete($option) {            
            $connection = Connection::getConnection();

            $result = null;
            if($option == 1){
                $statement = $connection->prepare("SELECT COUNT(*) AS total FROM users");
                $statement->execute();

                $result = $statement->fetch();
            }
            elseif ($option == 2) {
                $statement = $connection->prepare("SELECT COUNT(*) AS total FROM users WHERE id > 2");
                $statement->execute();

                $result = $statement->fetch();
            }
            return $result[0];
        }
    }