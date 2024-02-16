<?php
    require_once("User.php");
    
    class Student extends User {
        private $session;
        private static $count = 0;

        public function __construct($firstName, $lastName, $session) {
            parent::__construct($firstName, $lastName); // Super
            $this->session = $session;
            Student::$count++;
        }

        public function show() {
            parent::show();
            echo $this->session;
            echo Student::$count;
        }
    }