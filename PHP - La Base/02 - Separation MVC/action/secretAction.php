<?php
    function execute(){
        $spies = [];
        $spies[] = "Austin Powers";
        $spies[] = "Ethan Hunt";
        $spies[] = "James Bond";

        return compact("spies");
    }
?>