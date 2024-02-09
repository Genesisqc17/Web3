<?php
    function execute(){
        
        $info = $_POST["pointage"] ?? null;
        $formattedDate = date("Y-m-d H:i:s", time()); 
        file_put_contents("resultats.txt",$formattedDate . " - " . $info . "\n", FILE_APPEND);

        return compact("info");
    }