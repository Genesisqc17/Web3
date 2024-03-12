<?php
    require_once("action/DAO/Connection.php");

    class UserDAO {
        public static function authenticate($username, $password) {            
            $connection = Connection::getConnection();
            
            // ' or 1=1 or '1'='1  <-- SQL injection
            $statement = $connection->prepare("SELECT * FROM users WHERE username = ?");
            $statement->bindParam(1, $username); // 1 = premier ?
            // $statement->bindParam(2, $age); // 2 = deuxième ?
            $statement->execute();
            
            $result = null;

            // $lines = $statement->fetchAll(); // Toutes les lignes dans un tableau
            // $line1 = $statement->fetch();
            // $line2 = $statement->fetch();
            // $line3 = $statement->fetch();

            if ($row = $statement->fetch()) {
                if (password_verify($password, $row["password"])) {
                    $result = $row;
                }
            }

            return $result;
        }

        public static function logConnection($username) {
            $connection = Connection::getConnection();
            
            // $statement = $connection->prepare("INSERT INTO connection_logs (username, date) VALUES(?, ?)");
            // $statement->bindParam(1, $username); 
            // $date = date("Y-m-d");
            // $statement->bindParam(2, $date); 
            // $statement->execute();
        }
    }