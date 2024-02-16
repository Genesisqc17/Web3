<?php
    
    class User {
        private $firstName;
        private $lastName;

        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function show() {
            echo $this->firstName . " " . $this->lastName;
        }
    }