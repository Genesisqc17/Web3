<?php
    
    function execute() {
        $counter = file_get_contents("data/counter.txt");

        return compact("counter");
    }