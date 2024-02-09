<?php
    
    function execute() {
        $counter = file_get_contents("data/counter.txt");
        $showSuccessMessage = false;

        if (!empty($_POST["message"]) && !empty($_POST["name"]) &&
            !empty($_POST["course"])) {
            // Envoyer courriel
            $showSuccessMessage = true;
        }

        return compact("counter", "showSuccessMessage");
    }