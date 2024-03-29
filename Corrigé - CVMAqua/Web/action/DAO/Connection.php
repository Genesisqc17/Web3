<?php
    
    class Connection {
        private static $connection;

        // Singleton (ish)
        public static function getConnection() {
            if (empty(Connection::$connection)) {
                Connection::$connection = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASS);
                Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }

            return Connection::$connection;
        }

    }