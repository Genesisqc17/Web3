<?php
    
    function execute() {
        $counter = file_get_contents("data/counter.txt");
        $counter++;
        file_put_contents("data/counter.txt", $counter);

        return compact("counter");
    }