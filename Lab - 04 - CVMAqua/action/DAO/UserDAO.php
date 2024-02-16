<?php
    
    class UserDAO {

        public static function authenticate($username, $password) {
            $user = null;

            // check authenticate...
            if ($username == "john" && $password == "qwerty") {
                // $user = [];
                // $user["username"] = "John";
                // $user["visibility"] = 1;

                $user = [
                    "username" => "John",
                    "visibility" => 3
                ];
            }

            return $user;
        }
    }